<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navbars= Navbar::all();
        return view("backoffice.navbar.all",compact('navbars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "link"=>"required",
            "page"=>"required",
        ]);

        $navbar = new Navbar;
        $navbar->link = $request->link;
        $navbar->page = $request->page;
        
        $request->created_at = now();
        $navbar->save();
        return redirect()->route("navbar.index")->with("message","La navbar a bien été modifier");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        return view("backoffice.navbar.edit",compact('navbar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {
        $request->validate([
            "link"=>"required",
            "page"=>"required",
        ]);

        $navbar->link = $request->link;
        $navbar->page = $request->page;
        $navbar->updated_at= now();
        $navbar->save();
        return redirect()->route("navbars.index")->with("message","La Navbar a bien été modifer");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbar $navbar)
    {
        $navbar->delete();
        return redirect()->back();
    }
}
