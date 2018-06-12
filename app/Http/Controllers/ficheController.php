<?php

namespace App\Http\Controllers;

use App\ficheRenseignement;
use Illuminate\Http\Request;

class ficheController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store( )
    {

        ficheRenseignement::create(request()->all());



        return redirect('/dashboard');
    }
}
