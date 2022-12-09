@extends('app')

@section('title', 'F1 車手')

@section('f1_theme', 'F1 車手')

@section('f1_contents')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('drivers.create') }} ">新增車手</a>        
    </div>
    <table>
        <tr>
            <th>車手編號</th>
            <th>姓名</th>
            <th>所屬車隊</th>
            <th>車號</th>
            <th>出生國家</th>
            <th>操作一</th>
            <th>操作二</th>
            <th>操作三</th>
        </tr>
        @foreach($drivers as $driver)
            <tr>
                <td>{{ $driver->id }}</td>
                <td>{{ $driver->name }}</td>
                <td>{{ $driver->fleet->name }}</td>
                <td>{{ $driver->number }}</td>
                <td>{{ $driver->countryofbirth }}</td>
                <td><a href="{{ route('drivers.show', ['id'=>$driver->id]) }}">顯示</a></td>
                <td><a href="{{ route('drivers.edit', ['id'=>$driver->id]) }}">修改</a></td>
                <td>
                    <form action="{{ url('/drivers/delete', ['id' => $driver->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{$drivers->links()}}
@endsection
