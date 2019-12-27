@extends('layouts.base_layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Users List</h3>
            </div>
            <div class="col">
                <a href="{{route('createUser')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> New User</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead class="table-dark">
                <th>User Name</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Nationality</th>
                <th class="text-center" colspan="2">Actions</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->userName}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->lastName}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->nationality}}</td>
                        <td><a href="{{route('editUser', ['user'=>$user->id])}}"><button class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</button></td></a>
                        <td>
{{--                            <a href=""><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></a>--}}
                            {!! Form::open(['action'=>['UserController@delUser', $user->id], 'method'=>'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm', 'onclick'=>'return confirm("are u sure?")']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {!! $users->links() !!}

    </div>
@stop
