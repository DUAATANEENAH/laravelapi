<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinics extends Model
{
    //
    public function clicics()
    {
        return $this->morphMany('App\request_clinic', 'requesttable');
    }
}
