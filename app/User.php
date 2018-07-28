<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Comment;

use App\News;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'verified'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
<<<<<<< HEAD
	
	public function news() {
=======

    public function news() {
>>>>>>> fcebf8b9daaf19e60027db61885049c400079ac3
        return $this->hasMany(News::class);
    }
}
