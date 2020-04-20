<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
