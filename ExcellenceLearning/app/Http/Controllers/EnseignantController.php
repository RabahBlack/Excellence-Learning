<?php

namespace App\Http\Controllers;
use App\Enseignant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EnseignantController extends Controller
{
    public function index()
    {
        return   Enseignant::all();
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
        $ens=$request->all();
        DB::insert('insert into enseignants (EmailEns,nomEns,prenomEns,telEns,addressEns,profession) values (?,?,?,?,?,?)',[$ens['emailEns'], $ens['nomEns'],$ens['prenomEns'],$ens['telEns'],$ens['addressEns'],$ens['profession']]);

    }  
    public function destroy(Request $request,Enseignant $enseignant)
    {
      //  Enseignant::findOrFail();
       // $enseignant->delete();
        //return response()->json(null, 204);
        return "test";
    }
}
