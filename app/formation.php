<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Traits\LogsActivity;
class formation extends Model
{
    protected static $logAttributes = ['*'];

    protected $guarded=['etat'];
  public function deplib($idDept)
  {
    $dep=DB::table('departements')->select('libDept')->where('idDept','=',$idDept)->get();
    return $dep;
  }


}
