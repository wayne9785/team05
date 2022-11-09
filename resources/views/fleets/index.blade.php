@extends('app')

@section('title', 'F1 車隊')

@section('f1_theme', 'F1 車隊')

@section('f1_contents')
    <table>
        <tr>
            <th>車對編號</th>
            <th>車隊名稱</th>
            <th>代表國家</th>
            <th>操作一</th>
            <th>操作二</th>
        </tr>
        @foreach($fleets as $fleet)
            <tr>
                <td>{{ $fleet->id }}</td>
                <td>{{ $fleet->name }}</td>
                <td>{{ $fleet->country }}</td>
                <td><a href="{{ route('fleets.show', ['id'=>$fleet->id]) }}">詳細資料</a></td>
                <td><a href="{{ route('fleets.destroy', ['id'=>$fleet->id]) }}">刪除資料</a></td>
            </tr>
        @endforeach
    </table>
    @endsection