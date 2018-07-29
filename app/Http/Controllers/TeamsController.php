<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;

use App\Player;

use App\Comment;

class TeamsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $teams = Team::all();
        $comments = Comment::all();
        return view('teams.index', compact('teams', 'comments'));
    }

    public function show($id) {
        $team = Team::with('players')->find($id);
        return view('teams.show', compact('team'));
    }

}
