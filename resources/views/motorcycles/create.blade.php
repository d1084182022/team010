<html>
<head>
    <meta charset="UTF-8"/>
    <title>單一新增重機資料</title>
</head>
<body>
<h1>新增單一一筆重機資料</h1>
<form method="get">
    @csrf
    <table border="1">

        <tr>
            <td>廠牌</td>
            <td><input type="text" name="bid" ></td>
        </tr>
        <tr>
            <td>車名</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>製造年份</td>
            <td><input type="text" name="year" ></td>
        </tr>
        <tr>
            <td>CC數</td>
            <td><input type="text" name="CC">C.C</td>
        </tr>
        <tr>
            <td>引擎形式</td>
            <td><input type="text" name="eid"></td>
        </tr>
        <tr>
            <td>馬力</td>
            <td><input type="text" name="horsepower">Hp</td>
        </tr>
        <tr>
            <td>扭力</td>
            <td><input type="text" name="torque">Kgm</td>
        </tr>
        <tr>
            <td>油箱容量</td>
            <td><input type="text" name="tank_capacity">L</td>
        </tr>
        <tr>
            <td>座高</td>
            <td><input type="text" name="sitting_height">mm</td>
        </tr>
        <tr>
            <td>售價</td>
            <td><input type="text" name="price">萬</td>
        </tr>

    </table>
    <input type="submit" value="新增">
    <input type="reset" value="重新輸入">
</form>
</body>
</html>
