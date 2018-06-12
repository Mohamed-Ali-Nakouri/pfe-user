<?php

namespace App\Http\Controllers;

use App\formation;

use App\matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\etudiant;
use App\User;
//use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class EtudiantController extends Controller
{


    public function show()
    {
        $profile=User::all();
        return view('layouts.user.profile',compact('profile'));
    }

    public function get()
    {
        $forms=formation::all();
        return view('layouts.user.orientaation',compact('forms'));
    }

    public function get1()
    {
        $forms=formation::all();
        return view('layouts.user.orientaation_top_print',compact('forms'));
    }

  public function store(Request $request)
  {
      User::create([
            'name' => request('name'),
            'surname' => request('surname'),
            'cin' => request('cin'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'idDept' => request()['idDept'],
            'role' => request('role'),
           'avatar' => request('avatar'),
        ]);



      return redirect('login');
  }

    public function fetch()
    {


        $mats =  DB::table('matieres')
            ->join('uni_enseignements', 'uni_enseignements.idUnite', '=','matieres.idUnite' )
            ->join('formations', 'formations.idForm', '=', 'uni_enseignements.idForm')
            ->select('matieres.*','uni_enseignements.*','formations.idDept')
            ->where('formations.idDept','info')
            ->get();
        //$mats=matiere::all()->Where('idUnite','SGBD');

        return view('layouts.user.tableM',compact('mats'));
    }


    public function generate()
    {
       // return request()->except('_token');
        $exams=request()->toArray();
        return view('layouts.user.test',compact('exams'));

    }





}
