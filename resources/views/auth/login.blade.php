@extends('app')

@section('content')

<form class="col-6 mx-auto mt-5" method="POST" action="{{ route('auth.attempt_login') }}">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password">
    </div>

    <button type="submit" class="btn btn-success float-right">Login</button>
</form>

@endsection 