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
    {{dd("000")}}
    @foreach($new->teams as $team)
        <a href="/teams/{{$team->id}}"></a>,
    @endforeach
</div>

<div>
@endsection
