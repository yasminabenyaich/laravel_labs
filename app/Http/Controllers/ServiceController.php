<?php

namespace App\Http\Controllers;

use App\Models\icone;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $icones= Icone::all();
        return view('backoffice.service.all',compact('services','icones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icones= Icone::all();
        return view("backoffice.service.create",compact('icones','service'));
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
    
           $service = new Service();
           $service->icone_id= $request->icone_id;
           $service->h3= $request->h3;
           $service->p= $request->p;
           $service->save();
           return redirect(('services.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $icones = Icone::all();
        return view('backoffice.service.edit',compact('service','icones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            "icone_id"=> "required",
            "h3"=> "required",
            "p"=> "required",
           ]);
        $service->icone_id= $request->icone_id;
        $service->h3= $request->h3;
        $service->p= $request->p;
        $service->created_at = now();
        $service->save();

        return redirect('/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }
}
