<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
class Mat extends Model
{

    protected $guarded=['etat','idMat'];
}
