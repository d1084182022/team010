<html>
<head>
    <meta charset="UTF-8"/>
    <title>單一新增重機資料</title>
</head>
<body>
<h1>新增單一一筆重機資料</h1>
<form method="post" action="/motorcycles">
    @csrf
    <table border="1">

        <tr>
            <td>廠牌</td>
            <td>
                <input type="text" name="bid" required>
            </td>
        </tr>
        <tr>
            <td>車名</td>
            <td><input type="text" name="name" required ></td>
        </tr>
        <tr>
            <td>製造年份</td>
            <td>
                <select name="year">
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>CC數</td>
            <td>
                <select name="CC">
                    <option value="300">300</option>
                    <option value="400">400</option>
                    <option value="500">500</option>
                    <option value="600">600</option>
                    <option value="900">900</option>
                    <option value="1000">1000</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>引擎形式</td>
            <td><input type="text" name="eid"></td>
        </tr>
        <tr>
            <td>馬力</td>
            <td><input type="number" name="horsepower">Hp</td>
        </tr>
        <tr>
            <td>扭力</td>
            <td><input type="text" name="torque">Kgm</td>
        </tr>
        <tr>
            <td>油箱容量</td>
            <td><input type="number" name="tank_capacity" min="6" max="30">L</td>
        </tr>
        <tr>
            <td>座高</td>
            <td><input type="text" name="sitting_height">mm</td>
        </tr>
        <tr>
            <td>售價</td>
            <td><input type="number" name="price">萬</td>
        </tr>

    </table>
    <input type="submit" value="新增">
    <input type="reset" value="重新輸入">
</form>
</body>
</html>
