@extends ('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/images/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profile</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
            <hr>
            <h5>Email :- {{ $user->email }}</h5>
            <h5>Username :- {{ $user->name }}</h5>
        </div>
    </div>
@endsection