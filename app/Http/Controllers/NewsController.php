<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

use App\User;

use App\Team;

class NewsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show($id) {
         $new = News::with('user')->find($id);
         return view('news.show', compact('new'));
    }

    public function filterByTeam($name) {
         $team = Team::where('name', $name)->first();
         $news = $team->news()->latest()->paginate(10);
         return view ('news.index', compact('news'));
    }
}
