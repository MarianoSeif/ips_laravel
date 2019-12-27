@extends('layouts.base_layout')

@section('content')
    <div class="container">
        <h3>Edit User</h3>
        {!! Form::open(['route'=>['updateUser', $user->id], 'method'=>'put']) !!}
            <div class="form-group">
                {{ Form::label('userName', 'User Name: ') }}
                {{ Form::text('userName', $user->userName, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Name: ') }}
                {{ Form::text('name', $user->name, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('lastName', 'Last Name: ') }}
                {{ Form::text('lastName', $user->lastName, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('email', 'Email: ') }}
                {{ Form::text('email', $user->email, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('nationality', 'Nationality ') }}
                {{ Form::select('nationality', [
                    'Argentina' => 'Argentina',
                    'Brasil' => 'Brasil',
                    'Bolivia' => 'Bolivia',
                    'Chile' => 'Chile',
                    'Paraguay' => 'Paraguay',
                    'Uruguay' => 'Uruguay'
                    ],
                    $user->nationality,
                    ['placeholder' => 'Select nationality...']) }}
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                    <div class="col-2">
                        <a href="{{route('getUsers')}}" class="btn btn-info">Discard</a>
                    </div>
                </div>
            </div>

        {!! Form::close() !!}
    </div>
@stop
