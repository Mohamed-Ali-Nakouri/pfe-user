<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
  // $table->string('idForm');
  // $table->string('idSess');
  // $table->string('idDept');
    public function formation()
    {
      return $this->belongsTo(formation::class);
    }
    public function departement()
    {
      return $this->belongsTo(departement::class);
    }
    public function session()
    {
      return $this->belongsTo(session::class);
    }
}
