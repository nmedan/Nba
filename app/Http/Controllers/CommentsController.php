<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\CommentReceived;

use Illuminate\Support\Facades\Mail;

use App\Team;

use App\User;

class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('forbidden.comment');
    }

    public function store($id) {
        $user = auth()->user();
        $team = Team::find($id);
        $user->comments()->create([          
            'content'=>request('text'),
            'user_id'=>$user->id,
            'team_id'=>$team->id
        ]);

        Mail::to($team)->send(new CommentReceived($team));
        return redirect('/');
    }
}
