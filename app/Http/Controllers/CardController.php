<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\icone;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards= Card::all();
        $icones= Icone::all();
        
        return view('backoffice.card.allCard',compact('cards','icones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icones = Icone::all();
        return view('backoffice.card.createCard',compact('icones'));
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
            "icone_id" =>"required",
            "h2"=> "required",
            "p"=> "required",
        ]);
        $card = new Card();
        $card->icone_id = $request->icone_id;
        $card->h2 = $request->h2;
        $card->p = $request->p;
        $card->save();
        return redirect(('cards.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        $icones = Icone::all();
       return view('backoffice.card.editCard',compact('card','icones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        
        $request->validate([
            "icone_id" =>"required",
            "h2"=> "required",
            "p"=> "required",
        ]);

        $card->icone_id = $request->icone_id;
        $card->h2 = $request->h2;
        $card->p = $request->p;
        $card-> created_at = now();
        $card->save();

        return redirect('/cards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->back();
    }
}
