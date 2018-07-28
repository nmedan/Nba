@if(auth()->check()) 
     <a href="/logout">{{auth()->user()->name}}</a>
     <a href="/logout">Logout</a>

@else 
     <a href="/login">Login</a>
     <a href="/register">Register</a>
@endif

<div class="blog-header">
      <div class="container">
        <h1 class="blog-title">NBA league</h1>
</div>