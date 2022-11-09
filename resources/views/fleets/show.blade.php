@extends('app')

@section('title', '顯示特定車隊')

@section('f1_theme', '您所選取的車隊資料')

@section('f1_contents')
車隊編號：{{ $fleet->id }}<br/>
車隊名字：{{ $fleet->name }}<br/>
車隊代表國家：{{ $fleet->country }}<br/>
球隊所在地：{{ $fleet->location }}<br/>

@endsection      