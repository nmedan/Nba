<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD
use App\User;

use App\News;

=======
use App\News;

use App\User;

>>>>>>> fcebf8b9daaf19e60027db61885049c400079ac3
use App\Team;

class NewsController extends Controller
{
<<<<<<< HEAD
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
=======
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
>>>>>>> fcebf8b9daaf19e60027db61885049c400079ac3
}
