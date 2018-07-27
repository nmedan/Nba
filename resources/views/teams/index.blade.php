@extends ('layout.master')

@section('content')
<h2>Teams</h2>
 <table class="table">
    <tr>
         <td><b>Id</b></td>
         <td><b>Name</b></td>
    </tr>  
    @foreach ($teams as $team)    
        <tr>
            <td>{{$team->id}}</td>
            <td><a href="/teams/{{$team->id}}">{{$team->name}}</a></td>
        </tr>
    @endforeach
</table>

<p><h5>Comments</h5></p>
  @foreach ($comments as $comment)
               <p>
                    By {{$comment->user->name}} to <a href="/teams/{{$comment->team->id}}">{{$comment->team->name}}</a>
               </p>
               <p>
                    {{$comment->content}}
               </p>
               <p>
                    {{$comment->created_at}}
               </p>
               <hr>
   @endforeach

@endsection
