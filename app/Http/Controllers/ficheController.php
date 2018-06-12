<?php

namespace App\Http\Controllers;

use App\ficheRenseignement;
use App\User;
use Illuminate\Http\Request;
use DB;

class ficheController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store( )
    {

        ficheRenseignement::create(request()->all());
        $flight = User::where('cin'==\request('cin'));

        $flight->Inscription = '1';

        $flight->save();

        return redirect('/home');
    }
}
