<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(2);
        return view('backoffice.testimonial.all', compact('testimonials'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.testimonial.create");
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
            "img"=>"required",
            "p"=>"required",
            "pdp"=>"required",
            "name"=>"required",
            "job"=>"required",
        ]);

        $testimonial = new Testimonial();

        $testimonial->p = $request->p;
        // $testimonial->img= $request->file('img')->hashName();
        // $request->file('img')->storePublicly("img","public");
        $testimonial->pdp = $request->file("pdp")->hashName();
        $request->file("pdp")->storePublicly("img", "public");
        $testimonial->name = $request->name;
        $testimonial->job = $request->job;

        $testimonial -> created_at = now();
        $testimonial->save();
        return redirect()->route("testimonials.index")->with("message", "Le testimonial a bien été créée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view("backoffice.testimonial.show", compact("testimonial"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view("backoffice.testimonial.edit", compact("testimonial"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $this->authorize("update",$testimonial);
        $request->validate([
           
            "p"=>"required",
            "pdp"=>"required",
            "name"=>"required",
            "job"=>"required",
        ]);

        $testimonial->p = $request->p;
        // Storage::disk("public")->delete("img/" . $testimonial->img);
        // $testimonial->img = $request->file("img","public");
        Storage::disk("public")->delete("img/" . $testimonial->pdp);
        $testimonial->pdp = $request->file("pdp")->hashName();
        $request->file("pdp")->storePublicly("img", "public");
        $testimonial->name = $request->name;
        $testimonial->job = $request->job;

        $testimonial -> updated_at = now();
        $testimonial->save();
        return redirect()->route("testimonials.index")->with("message", "Le testimonial a bien été créée");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back();
    }
}
