<?php

namespace App\Http\Controllers;


use App\Models\CarousselItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarousselItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrouselItems = CarousselItem::all();
        return view('backoffice.carousselItem.all',compact('carousselItems'));
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
            "img"=> "required",
        ]);
        $carousselItem = new CarousselItem();

        $carousselItem->img = $request->file('img')->hashName();
        $request->file("img")->storePublicly("img","public");

        $carousselItem->created_at = now();
        $carousselItem->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caroussel_item  $caroussel_item
     * @return \Illuminate\Http\Response
     */
    public function show(CarousselItem $carousselItem)
    {
        return view("backoffice.carousselItem.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caroussel_item  $caroussel_item
     * @return \Illuminate\Http\Response
     */
    public function edit(CarousselItem $carousselItem)
    {
        return view("backoffice.carousselItem.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caroussel_item  $caroussel_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarousselItem $carousselItem)
    {
        $request->validate([
            "img"=> "required",
        ]);
        
        Storage::disk("public")->delete("img/" . $carousselItem->img);
        $carousselItem->img= $request->file("img")->hasName();
        $request->file("img")->storePublicly("img","puclic");

        $carousselItem->updated_at=now();
        $carousselItem->save();
        return redirect()->route("carousselItems.index")->with("message","Le caroussel a bien été créer");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caroussel_item  $caroussel_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarousselItem $carousselItem)
    {
        $carousselItem->delete();
        return redirect()->back();
    }
}
