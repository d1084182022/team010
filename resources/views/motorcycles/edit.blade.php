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
        <td>
            <select name="bid" checked>
                @foreach($brands as $brand)
                    <option value={{$brand->id}}>{{$brand->name}}</option>
                @endforeach
                    @if($motorcycle->bid=='1')
                        <option value="1" selected>{{$motorcycle->brand->name}}</option>
                    @else
                        <option value="1">{{$brand->name}}</option>
                    @endif
                    @if($motorcycle->bid=='2')
                        <option value="2" selected>{{$motorcycle->brand->name}}</option>
                    @else
                        <option value="2">{{$brand->name}}</option>
                    @endif
                    @if($motorcycle->bid=='3')
                        <option value="3" selected>{{$motorcycle->brand->name}}</option>
                    @else
                        <option value="3">{{$brand->name}}</option>
                    @endif
                    @if($motorcycle->bid=='4')
                        <option value="4" selected>{{$motorcycle->brand->name}}</option>
                    @else
                        <option value="4">{{$brand->name}}</option>
                    @endif
                    @if($motorcycle->bid=='5')
                        <option value="5" selected>{{$motorcycle->brand->name}}</option>
                    @else
                        <option value="5">{{$brand->name}}</option>
                    @endif
                    @if($motorcycle->bid=='6')
                        <option value="6" selected>{{$motorcycle->brand->name}}</option>
                    @else
                        <option value="6">{{$brand->name}}</option>
                    @endif
                    @if($motorcycle->bid=='7')
                        <option value="7" selected>{{$motorcycle->brand->name}}</option>
                    @else
                        <option value="7">{{$brand->name}}</option>
                    @endif
                    @if($motorcycle->bid=='8')
                        <option value="8" selected>{{$motorcycle->brand->name}}</option>
                    @else
                        <option value="8">{{$brand->name}}</option>
                    @endif
                    @if($motorcycle->bid=='9')
                        <option value="9" selected>{{$motorcycle->brand->name}}</option>
                    @else
                        <option value="9">{{$brand->name}}</option>
                    @endif

            </select>
        </td>
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
        <td>
            <select name="eid" checked>
                @foreach($enginetypes as $engine_type)
                    <option value={{$engine_type->id}}>{{$engine_type->engine_type}}</option>
                @endforeach
                @if($motorcycle->eid=='1')
                    <option value="1" selected>{{$motorcycle->enginetype->engine_type}}</option>
                @else
                    <option value="1">{{$engine_type->engine_type}}</option>
                @endif
                @if($motorcycle->eid=='2')
                    <option value="2" selected>{{$motorcycle->enginetype->engine_type}}</option>
                @else
                    <option value="2">{{$engine_type->engine_type}}</option>
                @endif
                @if($motorcycle->eid=='3')
                    <option value="3" selected>{{$motorcycle->enginetype->engine_type}}</option>
                @else
                    <option value="3">{{$engine_type->engine_type}}</option>
                @endif
                @if($motorcycle->eid=='4')
                    <option value="4" selected>{{$motorcycle->enginetype->engine_type}}</option>
                @else
                    <option value="4">{{$engine_type->engine_type}}</option>
                @endif
                @if($motorcycle->eid=='5')
                    <option value="5" selected>{{$motorcycle->enginetype->engine_type}}</option>
                @else
                    <option value="5">{{$engine_type->engine_type}}</option>
                @endif
                @if($motorcycle->eid=='6')
                    <option value="6" selected>{{$motorcycle->enginetype->engine_type}}</option>
                @else
                    <option value="6">{{$engine_type->engine_type}}</option>
                @endif
                @if($motorcycle->eid=='7')
                    <option value="7" selected>{{$motorcycle->enginetype->engine_type}}</option>
                @else
                    <option value="7">{{$engine_type->engine_type}}</option>
                @endif
            </select>
        </td>

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
