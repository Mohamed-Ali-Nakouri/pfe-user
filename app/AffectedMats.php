<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class AffectedMats extends Model
{

    protected static $logAttributes = ['*'];
    protected $guarded=['_token'];
}
