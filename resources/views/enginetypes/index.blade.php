<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有引擎資料</title>
</head>
<body>
<h1>顯示所有引擎資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>引擎形式</th>
        <th>詳細資料</th>


    </tr>

    @foreach($enginetypes as $engine_type)
        <tr>
            <td>{{$engine_type->id}}</td>
            <td>{{$engine_type->engine_type}}</td>
            <td>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
