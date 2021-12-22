<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有引擎資料</title>
</head>
<body>
<h1>顯示所有引擎資料</h1>
<a href="enginetypes/create">
    新增<br>
</a>

<table border="1">
    <tr>
        <th>編號</th>
        <th>引擎形式</th>
        <th>修改</th>
        <th>刪除</th>

    </tr>

    @foreach($enginetypes as $engine_type)
        <tr>
            <td>{{$engine_type->id}}</td>
            <td>{{$engine_type->engine_type}}</td>
            <td>
                <a href="enginetypes/{{$engine_type->id}}/edit">
                    修改
                </a>
            </td>
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
</body>
</html>
