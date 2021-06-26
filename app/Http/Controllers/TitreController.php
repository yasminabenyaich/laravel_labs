<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titres = Titre::paginate(2);
        return view("backoffice.titre.all",compact("titres"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //return view("backoffice.titre.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                "title"=>"required",
            ]);
    
            $titre = new Titre;
            $titre->title = $request->title;
        
            $titre -> created_at = now();
            $titre->save();
            return redirect()->route("titres.index")->with("message", "Le titre $titre->title a  bien été créée");
    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
         // return view("backoffice.titre.show", compact("titre"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit(Titre $titre)
    {
        return view("backoffice.titre.edit", compact("titre"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titre $titre)
    {
        {
            $request->validate([
                "title"=>"required",
            ]);
    
    
            $titre->title = $request->title;
   
    
            $titre -> updated_at = now();
            $titre->save();
            return redirect()->route("titres.index")->with("message", "Le titre $titre->title est bien modifié");
    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        $titre->delete();
        return redirect()->back();
    }
}
