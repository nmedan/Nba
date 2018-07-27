<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

use App\User;

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
}
