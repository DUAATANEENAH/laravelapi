<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class request_clinic extends Model
{
    //
    public function requesttable()
    {
        return $this->morphTo();
    }
}
