@extends('layouts.admin')


@section('content')


    <h1>Users</h1>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
            @if($users)
                 @foreach($users as $user)
                    <tr>
                        <td>{{$SrNum++}}</td>
                        <td><img height="50" width="50" src="{{$user->photo ? $user->photo->file : '/images/place.jpg'}}" alt="" class="img-rounded "></td>
                        <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
                        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>
                 @endforeach
            @endif
        </tbody>
    </table>

@stop