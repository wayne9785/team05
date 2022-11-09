@extends('app')

@section('title', '顯示特定車手')

@section('f1_theme', '您所選取的車手資料')

@section('f1_contents')
車手編號：{{ $driver->id }}<br/>
姓名：{{ $driver->name }}<br/>
所屬車隊：{{ $driver->tid }}<br/>
生日：{{ $driver->birthday }}<br/>
出賽次數：{{ $driver->frequency }}<br/>
生涯積分：{{ $driver->integral }}<br/>
@endsection