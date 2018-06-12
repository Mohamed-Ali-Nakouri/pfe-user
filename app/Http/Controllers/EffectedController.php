<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\affected;
class EffectedController extends Controller
{
  public function show()
  {
    $dep_list=affected::all();
    return view('layouts.student.inscription',compact('dep_list'));
  }

}
