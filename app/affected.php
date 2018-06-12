<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class affected extends Model
{

    protected static $logAttributes = ['*'];
}
