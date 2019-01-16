@extends('layout.master')

@section('title', '遊戲大賽')

@section('content')

    <section>
        <div style="margin-top:150px;" class="container" >
            <div class="row" >
                <div>
                    <h1 id="slogan">歡迎來到評審系統</h1>
                </div>
            </div>
            <div class="row" >
                <div class="col-xs-2 col-sm-2"></div>
                <div class="col-xs-8 col-sm-8">
                    <h3 style="text-align: center;">評分標準請以60~95分之間為主，每5分為一級距</h3>
                    <h3 style="text-align: center;">請於左方選單選擇學校後，於未評組別評分輸入區填入分數後按下提交即可送出分數</h3>
                    <h3 style="text-align: center;">各組下載文件按鈕將會連結至該組上傳空間，建議以新分頁開啟</h3>
                    <h3 style="text-align: center;">已評組別將會以紅色分數顯示(分數仍可修改)</h3>
                    <h3 style="text-align: center;">為了方便大家有一個評分的依據，以下是我們給予的分數參考。</h3>
                    <h3 style="text-align: center;">60-70: 淘汰</h3>
                    <h3 style="text-align: center;">71-80: 勉強錄取</h3>
                    <h3 style="text-align: center;">81-90: 建議錄取</h3>
                    <h3 style="text-align: center;">91-100: 強力推薦</h3>
                </div>
                <div class="col-xs-2 col-sm-2"></div>

                {{--@foreach($User as $user)--}}
                    {{--@if($user->identity=='upload')--}}
                    {{--<tr>--}}
                        {{--<td>{{$user->username}}</td>--}}
                        {{--<td>{{$user->youtube}}</td>--}}
                        {{--<td>{{$user->file}}</td>--}}
                    {{--</tr>--}}
                    {{--@endif--}}
                {{--@endforeach--}}

            </div>
            <div class="row" >
                <div class="col-xs-2 col-sm-2"></div>
                <div class="col-xs-8 col-sm-8">
                    <form method="POST" >
                        <select id="school-choice" onchange="location.href = (this.options[this.selectedIndex].value)">
                            <option  value="#">請選擇學校</option>
                            <option  value="NTU">台大</option>
                            <option value="NTUST">台科</option>
                            <option value="NCCU">政大</option>
                            <option value="NTHU">清大</option>
                            <option value="NIU">宜大</option>
                        </select>
                    </form>
                <div class="col-xs-2 col-sm-2"></div></div>
                <div >
                    <div class="col-xs-2 col-sm-2"></div>
                    <div id="user-console" class="col-xs-8 col-sm-8 col-md-8"></div>
                    <div class="col-xs-2 col-sm-2"></div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-4"></div>
                    <div class="col-xs-4 col-sm-4"></div>
                    <div class="col-xs-4 col-sm-4"></div>
                </div>

            </div>
        </div>
    </section>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>


@endsection
