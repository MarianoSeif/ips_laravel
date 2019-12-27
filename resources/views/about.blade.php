@extends('layouts.base_layout')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <p class="lead">Aplicación web de evaluación para IPS utilizando Laravel 6, mysql, bootstrap y ChartJs</p>
        </div>
        <div class="row">
            <div class="col-4 d-flex justify-content-center"><img src="{{asset('images/logo_laravel.png')}}"></div>
            <div class="col-4 d-flex justify-content-center"><img src="{{asset('images/logo_php.png')}}"></div>
            <div class="col-4 d-flex justify-content-center"><img src="{{asset('images/logo_mysql.png')}}"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 d-flex justify-content-center"><img src="{{asset('images/logo_chartjs.jpeg')}}"></div>
            <div class="col-6 d-flex justify-content-center"><img src="{{asset('images/logop_bootstrap.jpeg')}}"></div>

        </div>
    </div>
@stop
