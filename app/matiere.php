<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class matiere extends Model
{
    protected static $logAttributes = ['*'];

    protected $guarded=['etat'];
    public function libUnite($id)
    {
        $unite=uni_enseignement::where('idUnite',$id)->get();
        return $unite;
    }
}
