@extends('app')

@section('title', 'F1 車隊')

@section('f1_theme', 'F1 車隊')

@section('f1_contents')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('fleets.create') }} ">新增車隊</a>        
    </div>
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
                <td>
                        <form action="{{ url('/fleets/delete', ['id' => $fleet->id]) }}" method="post">
                            <input class="btn btn-default" type="submit" value="刪除" />
                            @method('delete')
                            @csrf
                        </form>
                    </td>
            </tr>
        @endforeach
    </table>
    @endsection