<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\News;

use App\Team;

class NewsController extends Controller
{
    public function index() {
		$news = News::all();
		return view('news.index', compact('news'));
	}
	
	public function show($id) {
		$news = News::with('user')->find($id);
		return view('news.show', compact('news'));
	}

    public function filterByTeams($name) {
        $team = Team::with('news')->where('name', $name)->first();
        $news = $team->news;
        return view('news.index', compact('news'));
    }
}
