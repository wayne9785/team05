@extends('app')

@section('title','編輯特定車手')

@section('f1_theme','編輯車手')

@section('f1_contents')
   @include('message.list')
   {!! Form::model($driver, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\DriversController@update', $driver->id]]) !!}
   @include('drivers.form', ['submitButtonText'=>'更新車手資料'])
   {!! Form::close() !!}

@endsection