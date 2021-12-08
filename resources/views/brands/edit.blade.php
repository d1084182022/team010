<html>
<head>
    <meta charset="UTF-8"/>
    <title>修改廠牌資料</title>
</head>
<body>
<h1>修改單一廠牌資料</h1>
<form method="post" action="/brands/{{$brand->id}}">
    @csrf
    @method("put")
    <table border="1">

        <tr>
            <td>編號</td>
            <td>{{$brand->id}}</td>
        </tr>
        <tr>
            <td>廠牌</td>
            <td><input type="text" value="{{$brand->name}}"></td>
        </tr>
        <tr>
            <td>國家</td>
            <td><input type="text" value="{{$brand->country}}"></td>
        </tr>

    </table>
    <input type="submit" value="修改">
    <input type="reset" value="重新輸入">
</form>
</body>
</html>
