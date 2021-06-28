<?php

namespace App\Http\Controllers;

use App\Models\CardImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cardImg= CardImg::all();
        
        return view('backoffice.cardImg.all',compact('cardImgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cardImgs = CardImg::all();
        return view('backoffice.cardImg.create');
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
            "img"=> "required",
            "h2"=> "required",
            "p"=> "requrired",
        ]);

        $cardImg = new CardImg();
        $cardImg->h2 = $request->h2;
        $cardImg->p = $request->p;
        $cardImg->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly("img","public");

        $cardImg-> created_at = now();
        $cardImg->save();
        return redirect()->route("cardImg.index")->with("message","Les cartes ont bien été créer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardImg  $cardImg
     * @return \Illuminate\Http\Response
     */
    public function show(CardImg $cardImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardImg  $cardImg
     * @return \Illuminate\Http\Response
     */
    public function edit(CardImg $cardImg)
    {
        return view('backoffice.cardImg.edit',compact('cardImg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CardImg  $cardImg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CardImg $cardImg)
    {
        $request->validate([
            "img"=> "required",
            "h2"=> "required",
            "p"=> "requrired",
        ]);
        $cardImg->h2= $request->h2;
        $cardImg->p = $request->p;
        Storage::disk("publilc")->delete("img/" .$cardImg->img);
        $cardImg->img = $request->file("img")->hashName();
        $request->file("img")->storePublicly("img","public");
        
        $cardImg-> updated_at = now();
        $cardImg->save();
        return redirect()->route('cardImgs.index')->with("message","Les cartes ont bien été modifiés");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardImg  $cardImg
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardImg $cardImg)
    {
        $cardImg->delete();
        return redirect()->back();
    }
}
