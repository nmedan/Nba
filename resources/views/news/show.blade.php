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
            <p>
            <h5>Teams</h5>
            <ol class="list-unstyled">
                   @foreach($new->teams as $team)
                       <li>
                             <a href="/teams/{{$team->id}}">{{$team->name}}</a>
                       </li>
                   @endforeach
            </ol>
            </p>
     </div>
    
         
@endsection
