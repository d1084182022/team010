<html>
<head>
    <meta charset="UTF-8"/>
    <title>單一新增廠牌資料</title>
</head>
<body>
<h1>新增單一一筆廠牌資料</h1>
<form method="post" action="/brands">
    @csrf
    <table border="1">
        <tr>
            <td>廠牌</td>
            <td>
                <input type="radio" name="name" value="Aprilia">
                <label for="Aprilia">Aprilia</label><br>
                <input type="radio" name="name" value="BMW">
                <label for="BMW">BMW</label><br>
                <input type="radio" name="name" value="Ducati">
                <label for="Ducati">Ducati</label><br>
                <input type="radio" name="name" value="Honda">
                <label for="Honda">Honda</label><br>
                <input type="radio" name="name" value="KTM">
                <label for="KTM">KTM</label><br>
                <input type="radio" name="name" value="Kawasaki">
                <label for="Kawasaki">Kawasaki</label><br>
                <input type="radio" name="name" value="Suzuki">
                <label for="Suzuki">Suzuki</label><br>
                <input type="radio" name="name" value="Yamaha">
                <label for="Yamaha">Yamaha</label><br>
            </td>
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
    <input type="submit" value="新增">
    <input type="reset" value="重新輸入">
</form>
</body>
</html>
