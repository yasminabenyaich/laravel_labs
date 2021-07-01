<?php

namespace App\Http\Controllers;

use App\Models\icone;
use App\Models\ServiceFeature;
use Illuminate\Http\Request;

class ServiceFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceFeatures = ServiceFeature::all();
        $icones= Icone::all();
        return view('backoffice.serviceFeature.all',compact('serviceFeatures','icones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icones = Icone::all();
        return view('backoffice.serviceFeature.create',compact('icones','serviceFeatures'));
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
        "icone_id"=> "required",
        "h3"=> "required",
        "p"=> "required",
       ]);

       $serviceFeature = new ServiceFeature();
       $serviceFeature->icone_id= $request->icone_id;
       $serviceFeature->h3= $request->h3;
       $serviceFeature->p= $request->p;
       $serviceFeature->save();
       return redirect(('serviceFeatures.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceFeature  $serviceFeature
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceFeature $serviceFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceFeature  $serviceFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceFeature $serviceFeature)
    {
        $icones = Icone::all();
        return view('backoffice.serviceFeature.edit',compact('serviceFeature','icones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceFeature  $serviceFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceFeature $serviceFeature)
    {
        $request->validate([
            "icone_id"=> "required",
            "h3"=> "required",
            "p"=> "required",
           ]);
        $serviceFeature->icone_id= $request->icone_id;
        $serviceFeature->h3= $request->h3;
        $serviceFeature->p= $request->p;
        $serviceFeature->created_at = now();
        $serviceFeature->save();

        return redirect('/serviceFeatures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceFeature  $serviceFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceFeature $serviceFeature)
    {
        $serviceFeature->delete();
        return redirect()->back();
    }
}
