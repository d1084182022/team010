@extends('app')
@section('title', '所有引擎形式資料')

@section('motorcycles_contents')
    <h1>顯示所有引擎資料</h1>
    <a href="enginetypes/create">
        新增引擎形式<br>
    </a>
    <table border="1">
        <tr>
            <th>編號</th>
            <th>引擎形式</th>
            <th>詳細</th>
            <th>修改</th>
            <th>刪除</th>

        </tr>

        @foreach($enginetypes as $engine_type)
            <tr>
                <td>{{$engine_type->id}}</td>
                <td>{{$engine_type->engine_type}}</td>
                <td><a href="{{ route('enginetypes.show', ['enginetype'=>$engine_type->id]) }}">詳細資料</a></td>
                <td><a href="{{ route('enginetypes.edit', ['enginetype'=>$engine_type->id]) }}">修改資料</a></td>
                <td>
                    <form method="post" action="enginetypes/{{$engine_type->id}}">
                        @csrf
                        @method("delete")
                        <input type="submit" value="刪除"/>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
