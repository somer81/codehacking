@extends('layouts.admin')



@section('content')

      <h2>Kullanıcılar</h2>



      <table class="table">
        <thead>
          <tr>

                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Active</th>
                <th>Created At</th>
                <th>Updated At</th>
          </tr>
        </thead>
        <tbody>

        @if($users)
        @foreach($users as $user)
          <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->role->name}}</td>
              <td>{{$user->is_active == 1 ? 'Aktif' : 'Pasif'}}</td>
              <td>{{$user->created_at->diffForHumans()}}</td>
              <td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>
        @endforeach

            @endif
        </tbody>
      </table>



@stop