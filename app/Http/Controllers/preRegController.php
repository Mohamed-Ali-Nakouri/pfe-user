<?php

namespace App\Http\Controllers;

use App\User;
use App\listeetud;
use App\listeprof;
use Illuminate\Http\Request;

class preRegController extends Controller
{

    public function verif(Request $request)
    {
        $q=$request->get('cin');
        $s=  listeetud::all()->where('cin','=',$q);
        //$s= listeetud::select('role')->where('cin', $q)->get();
        $p = listeprof::all()->where('cin','=',$q);
        //$p= listeprof::select('role')->where('cin', $q)->get();


        if($s>$p)
        {
            return $s ;
        }
        else
        {
            return $p ;
        }


    }
}
