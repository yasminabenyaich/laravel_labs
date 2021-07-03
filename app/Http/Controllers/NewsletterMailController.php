<?php

namespace App\Http\Controllers;

use App\Models\NewsletterMail;
use Illuminate\Http\Request;

class NewsletterMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newsletterMails = NewsletterMail::all();
        return view("backoffice.newsletterMail.create",compact('newslettersMail'));
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
            "mail"=>"required",
           
        ]);
        $newsletterMail = new NewsletterMail();
        $newsletterMail->mail= $request->mail;
        $newsletterMail->save();
        return redirect(('newsletterMail.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function show(NewsletterMail $newsletterMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsletterMail $newsletterMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsletterMail $newsletterMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsletterMail $newsletterMail)
    {
        //
    }
}
