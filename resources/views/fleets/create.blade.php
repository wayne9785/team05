@extends('app')

@section('title', '建立車隊表單')

@section('f1_theme', '建立車隊的表單')

@section('f1_contents')
    @include('message.list')
    {!! Form::open(['url' => 'fleets/store']) !!}
    @include('fleets.form', ['submitButtonText'=>'新增車隊資料'])
    {!! Form::close() !!}
@endsection
