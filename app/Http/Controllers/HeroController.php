<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes= Hero::all();
        return view('backoffice.hero.all',compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $heroes = Hero::all();
        return view('backoffice.hero.create',compact('heroes'));
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
            'logo'=>'required',
            'h3'=>'required',

        ]);
        $hero= new Hero();
        $hero->logo= $request->logo;
        $hero->h3= $request->h3;
        $hero->save();
        return redirect(('heroes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view('backoffice.hero.edit',compact('heroes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $request->validate([
            'logo'=>'required',
            'h3'=>'required',

        ]);
        $hero= new Hero();
        $hero->logo= $request->logo;
        $hero->h3= $request->h3;
        $hero->created_at= now();
        $hero->save();
        return redirect(('/heroes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {   
        $hero->delete();
        return redirect()->back();
    }
}
