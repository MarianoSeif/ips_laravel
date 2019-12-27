@extends('layouts.base_layout')

@section('content')
    <div class="container">
        {!! Form::open(['action'=>'UserController@addUser']) !!}
        <div class="form-group">
            {{ Form::label('userName', 'User Name: ') }}
            {{ Form::text('userName', null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('name', 'Name: ') }}
            {{ Form::text('name', null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('lastName', 'Last Name: ') }}
            {{ Form::text('lastName', null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email: ') }}
            {{ Form::text('email', null, ['class'=>'form-control']) }}
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
                null,
                ['placeholder' => 'Select nationality...']) }}
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-2">
                    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                </div>
                <div class="col-2">
                    <a href="{{route('getUsers')}}" class="btn btn-info">Discard</a>
                </div>
            </div>
        </div>

        {!! Form::close() !!}

    </div>
@stop
