<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

use App\Team;

class News extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function teams() {
        return $this->belongsToMany(Team::class);
    }
}
