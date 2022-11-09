@extends('app')

@section('title', 'F1 車手')

@section('f1_theme', 'F1 車手')

@section('f1_contents')
    
    <table>
        <tr>
            <th>車手編號</th>
            <th>姓名</th>
            <th>所屬車隊</th>
            <th>車號</th>
            <th>出生國家</th>
            <th>操作一</th>
            <th>操作二</th>
        </tr>
        @foreach($drivers as $driver)
            <tr>
                <td>{{ $driver->id }}</td>
                <td>{{ $driver->name }}</td>
                <td>{{ $driver->tid }}</td>
                <td>{{ $driver->number }}</td>
                <td>{{ $driver->countryofbirth }}</td>
                <td><a href="{{ route('drivers.show', ['id'=>$driver->id]) }}">詳細資料</a></td>
                <td><a href="{{ route('drivers.destroy', ['id'=>$driver->id]) }}">刪除資料</a></td>
            </tr>
        @endforeach
    </table>
@endsection
