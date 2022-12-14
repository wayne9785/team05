@extends('app')

@section('title','編輯特定車手')

@section('f1_theme','編輯車手')

@section('f1_contents')
   @include('message.list')
   {!! Form::model($fleet, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\FleetsController@update', $fleet->id]]) !!}
   @include('fleets.form', ['submitButtonText'=>'更新車隊資料'])
   {!! Form::close() !!}

@endsection