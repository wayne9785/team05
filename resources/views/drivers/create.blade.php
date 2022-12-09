@extends('app')

@section('title', '建立車手表單')

@section('f1_theme', '建立車手的表單')

@section('f1_contents')
   @include('message.list')
   {!! Form::open(['url' => 'drivers/store']) !!}
   @include('drivers.form', ['submitButtonText'=>'新增車手資料'])
   {!! Form::close() !!}

@endsection
