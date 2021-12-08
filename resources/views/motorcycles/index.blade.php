<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有重機資料</title>
</head>
<body>
<h1>顯示所有各品牌代表重機車系資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>廠牌</th>
        <th>車名</th>
        <th>售價</th>
        <th>操作</th>
    </tr>

    @foreach($motorcycles as $motorcycle)
        <tr>
            --
            <td>{{$motorcycle->id}}</td>
            <td>{{$motorcycle->bid}}</td>
            <td>{{$motorcycle->name}}</td>
            <td>{{$motorcycle->price}}萬</td>
            <td>
            <a href="motorcycles/{{$motorcycle->id}}">
                詳細資料
            </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
