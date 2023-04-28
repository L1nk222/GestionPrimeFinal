<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\secteur;

class SecteurController extends Controller

{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Summary of show
     * @param mixed $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id){
        $secteur = secteur::find($id);

        return view('Secteur', ['secteur' => $secteur]);

    }



    /**
     * Summary of showAll
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showAll(){
        $secteurAll=secteur::all();
        return view('secteur-all',['secteurAll' => $secteurAll]);

    }

}
