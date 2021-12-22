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
            <td><input type="text" name="name" value="{{$brand->name}}"></td>
        </tr>
        <tr>
            <td>國家</td>
            <td>
                <input type="radio" name="country" value="日本">
                <label for="日本">日本</label><br>
                <input type="radio" name="country" value="義大利">
                <label for="義大利">義大利</label><br>
                <input type="radio" name="country" value="德國">
                <label for="德國">德國</label><br>
                <input type="radio" name="country" value="奧地利">
                <label for="奧地利">奧地利</label><br>
            </td>
        </tr>

    </table>
    <input type="submit" value="修改">
    <input type="reset" value="重新輸入">
</form>
</body>
</html>
