@extends('app')

@section('title', '建立車隊表單')

@section('f1_theme', '建立車隊的表單')

@section('f1_contents')
    {!! Form::open(['url' => 'fleets/store'])!!}
    <div class="form-group">
        {!! Form::label('name','車隊名稱')!!}
        {!! Form::text('name', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
        {!! Form::label('country','代表國家')!!}
        {!! Form::text('country', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
        {!! Form::label('location','所在地')!!}
        {!! Form::text('location', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
        {!! Form::submit("新增車隊",['class' => 'btn btn-primary form-control'])!!}
   <div>
   {!! Form::close() !!}
@endsection
