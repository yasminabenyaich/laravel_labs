<?php

namespace App\Http\Controllers;

use App\Mail\Formulairecontact;
use App\Models\Categorie;
use App\Models\NewsLetter;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view("backoffice.post.all",compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post= Post::all();
        $categories = Categorie::all();
        $tags = Tag::all();
        return view("backoffice.post.create",compact('post','tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "title" => "required",
            "thumbnail"=>"required",
        ]);

        $post = new Post();

        if ($request->file('thumbnail')) {
            $post->thumbnail = $request->file("thumbnail")->hashName();
            $request->file('thumbnail')->storePublicly("img/blog/", "public");
        }

        $post->user_id = Auth::user()->id;

        $post->title = $request->title;
        $post->content = $request->content;
        if (Auth::user()->role_id == 3) {
            $post->validation = false;
        }
        $post->save();
        $post->tags()->attach($request->tags);
        $post->categories()->attach($request->categories);


        $mails = NewsLetter::all();
        if ($post->validation) {
            foreach ($mails as $mail) {
                Mail::to($mail->email)->send(new Formulairecontact($request));
            }
        }
        return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
        // return view("backoffice.post.show",compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize("post-edit", $post);
        $tags = Tag::all();
        $categories = Categorie::all();
        return view("backoffice.post.edit",compact("post","tags","categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            "title" => "required",
            "content" => "required",
        ]);

        if ($request->file('thumbnail')) {
            Storage::disk("public")->delete("img/blog/" . $post->thumbnail);
            $post->thumbnail = $request->file("thumbnail")->hashName();
            $request->file("thumbnail")->storePublicly("img/blog/", "public");
        }
        if ($request->user_id) {
            $post->user_id = $request->user_id;
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect()->route("posts.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
    Storage::disk("public")->delete("img/blog/" . $post->thumbnail);
      $post->delete();
      return redirect()->back();   
    }
    
    public function validation($id)
    {
     $post = Post::find($id);
     $post->validation  = true;
     $post->save();
     return redirect()->back();
    }
}
