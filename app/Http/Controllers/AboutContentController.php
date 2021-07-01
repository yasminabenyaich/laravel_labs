<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use Illuminate\Http\Request;

class AboutContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $aboutContents = AboutContent::all();
        return view('backoffice.aboutContent.all',compact('aboutContents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // return view('backoffice.aboutContent.create',compact('aboutContents',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        
        //     "p1"=> "required",
        //     "p2"=>"required",
        // ]);

        // $aboutContent = new AboutContent();
        // $aboutContent->p1 = $request->p1;
        // $aboutContent->p2 = $request->p2;
        // $aboutContent->save();
        // return redirect(('aboutContent.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function show(AboutContent $aboutContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutContent $aboutContent)
    {
    
        return view("backoffice.aboutContent.edit",compact('aboutContent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutContent $aboutContent)
    {
        $request->validate([
        
            "p1"=> "required",
            "p2"=>"required",
            "btn"=>"required",
        ]);
        $aboutContent->p1 = $request->p1;
        $aboutContent->p2 = $request->p2;
        $aboutContent->btn = $request->btn;
        $aboutContent-> created_at=now();
        $aboutContent->save();

        return redirect(('/aboutContents'))->with("message", "La section about bien été modifer");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutContent $aboutContent)
    {
        $aboutContent->delete();
        return redirect()->back();
    }
}
