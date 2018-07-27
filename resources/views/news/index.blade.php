@extends ('layout.master')

@section('content')
<p><h2>News</h2></p>

<div>

@foreach($news as $new)
<p>{{$new->user->name}}</p>
<p><a href = "/news/{{$new->id}}">{{$new->title}}</a></p>
<p>{{$new->created_at}}</p>
@endforeach

</div>
@endsection
