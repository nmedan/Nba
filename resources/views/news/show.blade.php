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
</div>

<div>
@endsection
