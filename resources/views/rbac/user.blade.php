@extends('layouts.master')

@section('content')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">用户列表</div>

  <!-- Table -->
  <table class="table">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>email</th>
        <th>role</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>action</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            @if (!empty($user->roles->name))
                <td>{{$user->roles->name}}</td>
            @else
                <td></td>
            @endif
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>
                <a href="{{ route('user.edit',['user_id' => $user->id]) }}"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="{{ route('user.delete',['user_id' => $user->id]) }}"><span class="glyphicon glyphicon-remove"></span></a>
            </td>
        </tr>
    @endforeach
  </table>
</div>

@endsection