@extends('app')

@section('title', '顯示特定車隊')

@section('f1_theme', '您所選取的車隊資料')

@section('f1_contents')
車隊編號：{{ $fleets->id }}<br />
車隊名字：{{ $fleets->name }}<br />
車隊代表國家：{{ $fleets->country }}<br />
球隊所在地：{{ $fleets->location }}<br />
該車隊的所有車手:<br />
<table>
    <tr>
        <th>車手編號</th>
        <th>姓名</th>
        <th>所屬車隊</th>
        <th>車號</th>
        <th>出生國家</th>
     
    </tr>
    @foreach($drivers as $driver)
    <tr>
        <td>{{ $driver->id }}</td>
        <td>{{ $driver->name }}</td>
        <td>{{ $driver->fleet->name }}</td>
        <td>{{ $driver->number }}</td>
        <td>{{ $driver->countryofbirth }}</td>

    </tr>
    @endforeach
</table>
@endsection