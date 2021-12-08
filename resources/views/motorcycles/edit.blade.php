<html>
<head>
    <meta charset="UTF-8"/>
    <title>單一修改重機資料</title>
</head>
<body>
<h1>修改單一一筆重機資料</h1>
<form method="post" action="/motorcycles/{{$motorcycle->id}}">
    @csrf
    @method("put")
    <table border="1">

    <tr>
        <td>編號</td>
        <td>{{$motorcycle->id}}</td>
    </tr>
    <tr>
        <td>廠牌</td>
        <td><input type="text" name="bid" value="{{$motorcycle->bid}}"></td>
    </tr>
    <tr>
        <td>車名</td>
        <td><input type="text" name="name" value="{{$motorcycle->name}}"></td>
    </tr>
    <tr>
        <td>製造年份</td>
        <td><input type="text" name="year" value="{{$motorcycle->year}}"></td>
    </tr>
    <tr>
        <td>CC數</td>
        <td><input type="text" name="CC" value="{{$motorcycle->CC}}">C.C</td>
    </tr>
    <tr>
        <td>引擎形式</td>
        <td><input type="text" name="eid" value="{{$motorcycle->eid}}"></td>
    </tr>
    <tr>
        <td>馬力</td>
        <td><input type="text" name="horsepower" value="{{$motorcycle->horsepower}}">Hp</td>
    </tr>
    <tr>
        <td>扭力</td>
        <td><input type="text" name="torque" value="{{$motorcycle->torque}}">Kgm</td>
    </tr>
    <tr>
        <td>油箱容量</td>
        <td><input type="text" name="tank_capacity" value="{{$motorcycle->tank_capacity}}">L</td>
    </tr>
    <tr>
        <td>座高</td>
        <td><input type="text" name="sitting_height" value="{{$motorcycle->sitting_height}}">mm</td>
    </tr>
    <tr>
        <td>售價</td>
        <td><input type="text" name="price" value="{{$motorcycle->price}}">萬</td>
    </tr>

</table>
    <input type="submit" value="修改">
    <input type="reset" value="重新輸入">
</form>
</body>
</html>
