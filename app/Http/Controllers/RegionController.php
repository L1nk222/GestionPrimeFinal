<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\region;
use App\Models\secteur;

class RegionController extends Controller
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
        $region = region::find();
        return view('');
    }
    /**
     * Summary of showAll
     * @param mixed $idSecteur
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showAll($idSecteur){
        $secteur = secteur::find($idSecteur);
        //if(region::find($))
        $regions = region::where('idSecteur',$secteur->idSecteur)->get();

        return view('region-all',['regions' => $regions,'secteur' => $secteur]);
    }

    public function findIdSecteur(){

    }
}
