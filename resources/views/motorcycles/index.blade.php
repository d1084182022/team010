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
        <th>製造年份</th>
        <th>CC數</th>
        <th>引擎形式</th>
        <th>馬力</th>
        <th>扭力</th>
        <th>油箱容量</th>
        <th>座高</th>
        <th>售價</th>
    </tr>

    @foreach($motorcycles as $motorcycle)
        <tr>
            <td>{{$motorcycle->id}}</td>
            <td>{{$motorcycle->bid}}</td>
            <td>{{$motorcycle->name}}</td>
            <td>{{$motorcycle->year}}</td>
            <td>{{$motorcycle->CC}}</td>
            <td>{{$motorcycle->eid}}</td>
            <td>{{$motorcycle->horsepower}}</td>
            <td>{{$motorcycle->torque}}</td>
            <td>{{$motorcycle->tank_capacity}}</td>
            <td>{{$motorcycle->sitting_height}}</td>
            <td>{{$motorcycle->price}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
