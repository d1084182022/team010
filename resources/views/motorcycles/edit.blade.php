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
        <td>
            <select name="year" checked>
               @if($motorcycle->year=="2010")
                    <option value="2010" selected>2010</option>
                @else
                    <option value="2010">2010</option>
                @endif
                   @if($motorcycle->year=="2011")
                       <option value="2011" selected>2011</option>
                   @else
                       <option value="2011">2011</option>
                   @endif
                   @if($motorcycle->year=="2012")
                       <option value="2012" selected>2012</option>
                   @else
                       <option value="2012">2012</option>
                   @endif
                   @if($motorcycle->year=="2013")
                       <option value="2013" selected>2013</option>
                   @else
                       <option value="2013">2013</option>
                   @endif
                   @if($motorcycle->year=="2014")
                       <option value="2014" selected>2014</option>
                   @else
                       <option value="2014">2014</option>
                   @endif
                   @if($motorcycle->year=="2015")
                       <option value="2015" selected>2015</option>
                   @else
                       <option value="2015">2015</option>
                   @endif
                   @if($motorcycle->year=="2016")
                       <option value="2016" selected>2016</option>
                   @else
                       <option value="2016">2016</option>
                   @endif
                   @if($motorcycle->year=="2017")
                       <option value="2017" selected>2017</option>
                   @else
                       <option value="2017">2017</option>
                   @endif
                   @if($motorcycle->year=="2018")
                       <option value="2018" selected>2018</option>
                   @else
                       <option value="2018">2018</option>
                   @endif
                   @if($motorcycle->year=="2019")
                       <option value="2019" selected>2019</option>
                   @else
                       <option value="2019">2019</option>
                   @endif
                   @if($motorcycle->year=="2020")
                       <option value="2020" selected>2020</option>
                   @else
                       <option value="2020">2020</option>
                   @endif
                   @if($motorcycle->year=="2021")
                       <option value="2021" selected>2021</option>
                   @else
                       <option value="2021">2021</option>
                   @endif
                   @if($motorcycle->year=="2022")
                       <option value="2022" selected>2022</option>
                   @else
                       <option value="2022">2022</option>
                   @endif
            </select></td>
    </tr>
    <tr>
        <td>CC數</td>
        <td>
            <select name="CC" checked>
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
        <td><input type="text" name="eid" value="{{$motorcycle->eid}}"></td>
    </tr>
    <tr>
        <td>馬力</td>
        <td><input type="number" name="horsepower" value="{{$motorcycle->horsepower}}">Hp</td>
    </tr>
    <tr>
        <td>扭力</td>
        <td><input type="number" name="torque" value="{{$motorcycle->torque}}">Kgm</td>
    </tr>
    <tr>
        <td>油箱容量</td>
        <td><input type="number" name="tank_capacity" value="{{$motorcycle->tank_capacity}}" min="6" max="30">L</td>
    </tr>
    <tr>
        <td>座高</td>
        <td><input type="number" name="sitting_height" value="{{$motorcycle->sitting_height}}">mm</td>
    </tr>
    <tr>
        <td>售價</td>
        <td><input type="number" name="price" value="{{$motorcycle->price}}">萬</td>
    </tr>

</table>
    <input type="submit" value="修改">
    <input type="reset" value="重新輸入">
</form>
</body>
</html>
