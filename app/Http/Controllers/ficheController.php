<?php

namespace App\Http\Controllers;

use App\ficheRenseignement;
use App\User;
use Illuminate\Http\Request;
use DB ;
class ficheController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store( )
    {
        DB::update('update users set Inscription = 1 where cin = ?',[\request('cin')]);
        ficheRenseignement::create(request()->all());


        return redirect('/home');
    }
}
