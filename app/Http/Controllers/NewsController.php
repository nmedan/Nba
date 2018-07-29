<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\News;

use App\Team;

class NewsController extends Controller
{
    public function index() {
		$news = News::with('user')->latest()->paginate(10);
		return view('news.index', compact('news'));
	}
	
	public function show($id) {
		$new = News::with('teams')->find($id);
		return view('news.show', compact('new'));
	}

    public function create() {
        $teams = Team::all();
        return view('news.create', compact('teams'));

    }

    public function store(Request $request) {
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required',
            'teams' => 'required|array',
        ]);

        $new = new News;
        $new->title = request('title');
        $new->content = request('content');
        $new->user_id = auth()->user()->id;

        $new->save();

        $new->teams()->attach(request('teams'));
        return redirect('/news')->withFlashMessage('Thank you for publishing article on http://www.nba.com.');
    }

    public function filterByTeams($name) {
        $team = Team::with('news')->where('name', $name)->first();
        $news = $team->news;
        return view('news.index', compact('news'));
    }

}
