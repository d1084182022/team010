<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一廠牌資料</title>
</head>
<body>
<h1>顯示單一廠牌資料</h1>
<table border="1">

    <tr>
        <td>編號</td>
        <td>{{$engine_type->id}}</td>
    </tr>
    <tr>
        <td>引擎形式</td>
        <td>{{$engine_type->engine_type}}</td>
    </tr>

</table>
<h1>{{$engine_type->engine_type}}廠牌的所有車系(共{{ count($engine_type->motorcycle)}}位)</h1>
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
    @foreach($engine_type->motorcycle as $motorcycle)
        <tr>
            <td>{{$motorcycle->id}}</td>
            <td>{{$motorcycle->bid}}</td>
            <td>{{$motorcycle->name}}</td>
            <td>{{$motorcycle->year}}</td>
            <td>{{$motorcycle->CC}}C.C</td>
            <td>{{$motorcycle->eid}}</td>
            <td>{{$motorcycle->horsepower}}Hp</td>
            <td>{{$motorcycle->torque}}Kgm</td>
            <td>{{$motorcycle->tank_capacity}}L</td>
            <td>{{$motorcycle->sitting_height}}mm</td>
            <td>{{$motorcycle->price}}萬</td>
        </tr>
    @endforeach
</table>
</body>
</html>
