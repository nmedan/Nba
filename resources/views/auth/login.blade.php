@extends ('layout.master')


    @section('content')
        <form method="post" action="/login">
            {{csrf_field()}}           
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <p>
           <div>
               @include('partials.error-message', ['fieldName' => 'email'])
           </div>
           <div>
               @include('partials.error-message', ['fieldName' => 'password'])
           </div>
        </p>
    @endsection
