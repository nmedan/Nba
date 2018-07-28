<?php

namespace App;

use App\Player;

use App\Comment;

<<<<<<< HEAD
use App\Team;

=======
>>>>>>> fcebf8b9daaf19e60027db61885049c400079ac3
use App\News;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'email', 'address', 'city'
    ];

    public function players() {
        return $this->hasMany(Player::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function news() {
<<<<<<< HEAD
        return $this->belongsToMany(News::class);
=======
        return $this->hasMany(News::class);
>>>>>>> fcebf8b9daaf19e60027db61885049c400079ac3
    }
}
