@extends('app')

@section('title','編輯特定車手')

@section('f1_theme','編輯車手')

@section('f1_contents')
   {!! Form::open(['url' => 'drivers/update'])!!}
   <div class="form-group">
        {!! Form::label('name','車手')!!}
        {!! Form::text('name', $driver->name, ['class' => 'form-control'])!!}
   <div>
   <div class="form-group">
        {!! Form::label('tid','所屬車隊')!!}
        {!! Form::select('tid', $selectedTid, ['class' => 'form-control'])!!}
   <div>
   <div class="form-group">
        {!! Form::label('number','車號')!!}
        {!! Form::text('number', $driver->number, ['class' => 'form-control'])!!}
   <div>
   <div class="form-group">
        {!! Form::label('frequency','出賽次數')!!}
        {!! Form::text('frequency', $driver->frequency, ['class' => 'form-control'])!!}
   <div>
   <div class="form-group">
        {!! Form::label('integral','生涯積分')!!}
        {!! Form::text('integral', $driver->integral, ['class' => 'form-control'])!!}
   <div>
   <div class="form-group">
        {!! Form::label('birthday','生日')!!}
        {!! Form::date('birthday', $driver->birthday, ['class' => 'form-control'])!!}
   <div>
   <div class="form-group">
        {!! Form::label('countryofbirth','出生國家')!!}
        {!! Form::text('countryofbirth', $driver->countryofbirth, ['class' => 'form-control'])!!}
   <div>
   <div class="form-group">
        {!! Form::submit("更新車手資料",['class' => 'btn btn-primary form-control'])!!}
   <div>
   {!! Form::close() !!}

@endsection