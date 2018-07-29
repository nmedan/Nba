@extends ('layout.master')

    @section('content')
        <form method="post" action="/news">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" name="content" class="form-control">
            </div>
            @if (count($teams))
            <div class="form-group">
                <label for="teams[]">Teams</label> <br>
                @foreach ($teams as $team)
                    <input type="checkbox" id="team" name="teams[]" value="{{ $team->id }}"> {{ $team->name }} <br>
                @endforeach
            </div>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <p>
           <div>
               @include('partials.error-message', ['fieldName' => 'title'])
           </div>
           <div>
               @include('partials.error-message', ['fieldName' => 'content'])
           </div>
           <div>
               @include('partials.error-message', ['fieldName' => 'teams[]'])
           </div>
        </p>
    @endsection
