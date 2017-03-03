@extends('layouts.master')
@section('title')
  edit 
@endsection
@section('content')

<form action="{{ route('post.edit') }}" method="post">
  <input type="hidden" name="id" value="{{ $user->id }}">
  <div class="form-group">
    <label for="name">Username</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" readonly id="email" name="email" value="{{ $user->email }}" placeholder="email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}" placeholder="Password">
  </div>
  {{-- <div class="form-group">
    <label for="role">Role</label>
    <input type="text" class="form-control" id="role" value="{{ $user->role }}" placeholder="role">
  </div> --}}
  <button type="submit" class="btn btn-default">Submit</button>
  {{ csrf_field() }}
</form>

@endsection