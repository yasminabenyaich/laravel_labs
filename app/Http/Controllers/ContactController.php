<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::first();
        return view("backoffice.contact.all",compact('contact'));
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
            "h2"=>"required",
            "p"=>"required",
            "adress"=>"required",
            "phone"=>"required",
            "mail"=>"required",
            "position"=>"required",
        ]);

        $contact = new Contact();
        $contact->h2 = $request->h2;
        $contact->p = $request->p;
        $contact->adress = $request->adress;
        $contact->phone = $request->phone;
        $contact->mail = $request->mail;
        $contact->position = $request->position;
        $contact->created_at= now();
       
        $contact-> save();
            return redirect(('contacts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view("backoffice.contact.edit",compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            "h2"=>"required",
            "p"=>"required",
            "adress"=>"required",
            "phone"=>"required",
            "mail"=>"required",
            "position"=>"required",
        ]);
        $contact = new Contact();
        $contact->h2= $request->h2;
        $contact->p= $request->p;
        $contact->adress= $request->adress;
        $contact->phone= $request->phone;
        $contact->mail= $request->mail;
        $contact->position = $request->position;
        $contact->created_at= now();
        $contact->save();
            return redirect(('/contacts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }
}
