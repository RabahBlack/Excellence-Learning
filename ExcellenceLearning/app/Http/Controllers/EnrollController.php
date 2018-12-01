<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Formation;

class EnrollController extends Controller
{
   public function store(Request $request){
        $post = $request->all();
        $fatherfn = $post["father-first-name"];
        $fatherln = $post["father-last-name"];
        $fatherpn = $post["father-phone-number"];
        $fathere = $post["father-email"];
        $motherfn = $post["mother-first-name"];
        $motherln = $post["mother-last-name"];
        $motherpn = $post["mother-phone-number"];
        $mothere = $post["mother-email"];
        $fn = $post["student-first-name"];
        $ln = $post["student-last-name"];
        $bd = $post["student-birth-date"];
        $bp = $post["student-birth-place"];
        $gender = $post["student-gender"];
        $eduinst = $post["edu_institution"];
        $town = $post["town"];
        $mark = $post["mark"];
        $level = $post["level"];
        $health = $post["health-state"];
        $course = $post["course"];
        $enroll = $post["enroll"];
        
        DB::insert('insert into tuteurs (emailt, nomT, prenomT, telT) values (?, ?, ?, ?)', [$fathere, $fatherfn, $fatherln, $fatherpn]);
        DB::insert('insert into tuteurs (emailt, nomT, prenomT, telT) values (?, ?, ?, ?)', [$mothere, $motherfn, $motherln, $motherpn]);
        $id = DB::table('eleves')->insertGetId([
                'nom' => $fn,
                'prenom' => $ln,
                'dnaiss' => $bd,
                'lieuNaiss'=>$bp,
                'sexe'=>$gender,
                'etablissement'=>$eduinst,
                'commune'=>$town,
                'nivScolaire'=>$level,
                'moyenne'=>$mark,
                'etatSante'=>$health,
                'dateinsc'=>'1995-01-27',
                'etatDem'=>0,
                'emailtp'=>$fathere,
                'emailtm'=>$mothere,         
                'urlPhoto'=>"nothing",
            ]
        );
        $formation = Formation::all();
        return view('enroll', ['enroll'=>true, 'home'=>false, 'about'=>false, 'courses'=>false, "formation"=>$formation, "id"=>$id]);
    }
}
