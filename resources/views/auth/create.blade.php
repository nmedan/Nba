@extends ('layout.master')

    @section('content')
        <form method="post" action="/register">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm password</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
          <p>
           <div>
               @include('partials.error-message', ['fieldName' => 'name'])
           </div>
           <div>
               @include('partials.error-message', ['fieldName' => 'email'])
           </div>
           <div>
               @include('partials.error-message', ['fieldName' => 'password'])
           </div>
           <div>
               @include('partials.error-message', ['fieldName' => 'confirmed'])
           </div>
        </p>
    @endsection
