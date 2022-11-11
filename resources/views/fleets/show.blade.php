@extends('app')

@section('title', '顯示特定車隊')

@section('f1_theme', '您所選取的車隊資料')

@section('f1_contents')
車隊編號：{{ $fleets->id }}<br/>
車隊名字：{{ $fleets->name }}<br/>
車隊代表國家：{{ $fleets->country }}<br/>
球隊所在地：{{ $fleets->location }}<br/>

@endsection      