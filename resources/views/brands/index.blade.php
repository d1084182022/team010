<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有廠牌資料</title>
</head>
<body>
<h1>顯示所有廠牌資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>廠牌</th>
        <th>國家</th>

    </tr>

    @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td>{{$brand->name}}</td>
            <td>{{$brand->country}}</td>

        </tr>
    @endforeach
</table>
</body>
</html>