<html>
<head>
    <meta charset="UTF-8"/>
    <title>修改引擎形式資料</title>
</head>
<body>
<h1>修改單一引擎形式資料</h1>
<form method="post" action="/enginetypes/{{$engine_type->id}}">
    @csrf
    @method("put")
    <table border="1">

        <tr>
            <td>編號</td>
            <td>{{$engine_type->id}}</td>
        </tr>
        <tr>
            <td>引擎形式</td>
            <td><input type="text" name="engine_type" value="{{$engine_type->engine_type}}"></td>
        </tr>


    </table>
    <input type="submit" value="修改">
    <input type="reset" value="重新輸入">
</form>
</body>
</html>
