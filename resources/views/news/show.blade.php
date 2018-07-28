@extends ('layout.master')

@section('content')
<div>
<p><h2>{{$new->title}}</h2></p>
    <div>
        <b>Author: </b>{{$new->user->name}}
    </div>
    <div>
        <b>Content: </b>{{$new->content}}
    </div>
    <div>
        <b>Created at: </b>{{$new->created_at}}
    </div>
<<<<<<< HEAD
</div>

<div>
=======
    {{dd("000")}}
    @foreach($new->teams as $team)
        <a href="/teams/{{$team->id}}"></a>,
    @endforeach
</div>

<div>
@endsection
>>>>>>> fcebf8b9daaf19e60027db61885049c400079ac3
