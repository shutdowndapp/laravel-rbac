@extends('layouts.master')
@section('content')
    <form action="{{ route('post.register') }}" method="post">
        <div class="form-group">
            <label for="name">Email address</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        {{ csrf_field() }}
    </form>
@endsection