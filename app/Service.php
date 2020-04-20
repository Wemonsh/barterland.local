<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function type()
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function selects()
    {
        return $this->belongsToMany(Select::class);
    }
}
