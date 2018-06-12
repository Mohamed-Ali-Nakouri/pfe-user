<?php

namespace App\Http\Controllers;

use App\departement;
use App\classe;
use App\salle;
use Illuminate\Support\Facades\DB;

class examController extends Controller
{
    public function show()
    {
        $dep_list=departement::all();

        $salles_list=salle::select('idSalle')->where('idSalle','NOT LIKE','L%')->get();


        return view('layouts.user.emp_exam',compact('dep_list','salles_list'));
    }


    public function find()
    {
        if(!empty(request('id')))
        {
            $mats = DB::table('matieres')
                ->join('uni_enseignements', 'uni_enseignements.idUnite', '=','matieres.idUnite' )
                ->join('formations', 'formations.idForm', '=', 'uni_enseignements.idForm')
                ->join('classes', 'classes.idForm', '=', 'formations.idForm')
                ->select('matieres.libMat')
                ->where('formations.idDept',request('id'))
                ->where('libMat', 'NOT LIKE' , 'Atelier%')
                ->where('matieres.idUnite', 'NOT LIKE' , 'Cul_lang')

                ->get();
            return $mats;
        }


    }


    public function fetch_classes_for_exam()
    {
        $classes_list=classe::select('idForm','nomClass')->where('idDept',request('id'))->get();

        return $classes_list;
    }

    public function fetch_salles_for_exam()
    {
        $salles_list=salle::select('idSalle')->where('idSalle','NOT LIKE','L%')->get();

        return view('layouts.user.emp_exam',compact('salles_list'));
    }

}
