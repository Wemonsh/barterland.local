<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Select extends Model
{
    public $timestamps = false;

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
