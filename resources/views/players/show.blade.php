@extends ('layout.master')

@section('content')
<div>
<p><h2>{{$player->first_name}} {{$player->last_name}}</h2></p>
    <div>
        <b>Name: </b>{{$player->first_name}} {{$player->last_name}}
    </div>
    <div>
        <b>Email: </b>{{$player->email}}
    </div>
    <div>
        <b>Team: </b><a href="/teams/{{$player->team->id}}">{{$player->team->name}}</a>
    </div>
</div>
@endsection
