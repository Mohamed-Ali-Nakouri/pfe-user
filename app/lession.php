<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
class lession extends Model
{

    protected static $logAttributes = ['*'];

}
