<html>
<head>
    <meta charset="UTF-8"/>
    <title>單一新增引擎形式資料</title>
</head>
<body>
<h1>新增單一一筆引擎形式資料</h1>
<form method="post" action="/enginetypes">
    @csrf
    <table border="1">

        <tr>
            <td>引擎形式</td>

            <td>
                <input type="text" name="engine_type">
            </td>
        </tr>
    </table>
    <input type="submit" value="新增">
    <input type="reset" value="重新輸入">
</form>
</body>
</html>
