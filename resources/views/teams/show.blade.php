@extends ('layout.master')

@section('content')
<div>
<p><h2>{{$team->name}}</h2></p>
    <div>
        <b>Id: </b>{{$team->id}}
    </div>
    <div>
        <b>Name: </b>{{$team->name}}
    </div>
    <div>
        <b>Email: </b>{{$team->email}}
    </div>
    <div>
        <b>Address: </b>{{$team->address}}
    </div>
    <div>
        <b>City: </b>{{$team->city}}
    </div>
</div>

 <div>
            <p>
            <h5>Teams</h5>
            <ol class="list-unstyled">
                   @foreach($team->players as $player)
                       <li>
                             <a href="/players/{{$player->id}}">{{$player->first_name}}  {{$player->last_name}}</a>
                       </li>
                   @endforeach
            </ol>
            </p>
 </div>

<div>
   <p><h5>Post a comment</h5></p>
   <form method="post" action="/teams/{{$team->id}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="text">Text</label>
            <input type="text" name="text" class="form-control">
            @include('partials.error-message', ['fieldName' => 'text'])
        </div>     
       <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
