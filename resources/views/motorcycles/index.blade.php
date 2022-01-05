@extends('app')
@section('title', '重機資料')

@section('motorcycles_contents')
    <h1>顯示所有各品牌代表重機車系資料</h1>
    <a href="{{ route('motorcycles.expensive') }}">超過80萬<br></a>
    <a href="{{ route('motorcycles.yamaha') }}">廠牌是Yamaha<br></a>
    <a href="motorcycles/create">
        新增重機<br>
    </a>
    <table border="1">
        <tr>
            <th>編號</th>
            <th>廠牌</th>
            <th>引擎</th>
            <th>車名</th>
            <th>售價</th>
            <th>操作</th>
            <th>操作2</th>
            <th>操作3</th>

        </tr>

        @foreach($motorcycles as $motorcycle)
            <tr>

                --
                <td>{{$motorcycle->id}}</td>
                <td>{{$motorcycle->brand->name}}</td>
                <td>{{$motorcycle->enginetype->engine_type}}</td>
                <td>{{$motorcycle->name}}</td>
                <td>{{$motorcycle->price}}</td>
                <td><a href="{{ route('motorcycles.show', ['motorcycle'=>$motorcycle->id]) }}">顯示詳細資料</a></td>
                <td><a href="{{ route('motorcycles.edit', ['motorcycle'=>$motorcycle->id]) }}">修改資料</a></td>
                <td>
                    <form method="post" action="motorcycles/{{$motorcycle->id}}">
                        @csrf
                        @method("delete")
                        <input type="submit" value="刪除"/>
                    </form>
                </td>


            </tr>
        @endforeach
    </table>

@endsection
