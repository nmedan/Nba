@extends ('layout.master')

@section('content')
<p><h2>News</h2></p>

<p style="background-color:lightgreen; color:white; text-align:center; vertical-align:middle">
@if (Session::has('flash_message'))
    {{ Session::get('flash_message') }}
@endif
</p>

<a href="/news/create">
   <button type="button" class="btn btn-primary">
       Create new
   </button>
</a>

@foreach($news as $new)
<p>{{$new->user->name}}</p>
<p><a href = "/news/{{$new->id}}">{{$new->title}}</a></p>
<p>{{$new->created_at}}</p>
<hr>
@endforeach

<nav class="blog-pagination">
        <a class="btn btn-outline-{{ $news->currentPage() == 1 ? 'secondary disabled' : 'primary' }}"
            href="{{ $news->previousPageUrl() }}">Previous</a>
        <a class="btn btn-outline-{{ $news->hasMorePages() ? 'primary': 'secondary disabled' }}"
            href="{{ $news->nextPageUrl() }}">Next</a>
        Page {{ $news->currentPage() }} of {{ $news->lastPage() }}
</nav>
@endsection


