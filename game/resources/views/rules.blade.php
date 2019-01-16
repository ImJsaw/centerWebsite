@extends('layout.master')

@section('title', '遊戲大賽')

@section('content')


<!--/#action-->

<section id = "log-in">
    <div class="container">
        <div class = "row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 padding-top">
                <h2 class="page-header">比賽規則</h2>
                <p>A. 每一組於UPLOAD區上傳遊戲展示影片以及說明文件，最後入選組別由評審們審出</p>
                <p>B. 入選隊伍於比賽當日<a href="agenda">(詳見Agenda分頁)</a>8:00以前至台科大IB大樓一樓報到，領取參賽獎金、張貼海報及準備設備</p>
                <p>C. 於8:30 - 17:30間進行擺攤</p>
                <p>D. 依序報告(每組10分鐘，時間到請直接進行5分鐘Q&A)，報告順序詳見<a href="agenda">Agenda分頁</a></p>
                <p>E. 針對一些來信詢問的問題我們回答在這份<a href="https://docs.google.com/document/d/1dKie4xO6SvCnEy8cTfsIEaN8HHNiUPYb4Sme5PPoWqU/edit">Google文件</a>當中</p>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class = "row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 padding-top">
                <h2 class="page-header">獎項</h2>
                <table border="0">
                    <tbody>
                    <tr>
                        <td>最佳技術獎(網路技術、視覺特效、互動設計、遊戲效能)</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>優等二組、佳作二組</td>
                    </tr>
                    <tr>
                        <td>最佳音效獎</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>優等一組</td>
                    </tr>
                    <tr>
                        <td>最佳視覺設計獎</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>優等一組、佳作一組</td>
                    </tr>
                    <tr>
                        <td>最佳創新獎</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>優等一組、佳作一組</td>
                    </tr>
                    <tr>
                        <td>最佳遊戲設計獎(遊戲性)</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>優等一組、佳作一組</td>
                    </tr>
                    <tr>
                        <td>最佳人氣獎</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>優等一組</td>
                    </tr>
                    <tr>
                        <td>最佳台風獎</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>佳作一組</td>
                    </tr>
                    <tr>
                        <td>最佳遊戲劇本獎</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>佳作一組</td>
                    </tr>
                    <tr>
                        <td>年度風雲遊戲獎</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <!--td>獎座+獎狀+獎金新臺幣50000元</td-->
                        <td>一組</td>
                    </tr>
                    <!--
                    <tr bgcolor="#A67B4A" >
                      <td>優等</td>
                      <td>&nbsp;&nbsp;&nbsp;</td>
                      <td>獎狀+獎金新臺幣3000元</td>
                    </tr>
                    <tr bgcolor="#A67B4A">
                      <td>佳作</td>
                      <td>&nbsp;&nbsp;&nbsp;</td>
                      <td>獎狀+獎金新臺幣1000元</td>
                    </tr>
                    <tr bgcolor="#A67B4A">
                      <td>入圍</td>
                      <td>&nbsp;&nbsp;&nbsp;</td>
                      <td>獎金新臺幣1000元</td>
                    </tr>
                    -->
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</section>

<section>
    <div id="judge-system" class="container" style="display:none;">
        <div class="row" >
            <div>
                <h1 id="slogan">歡迎來到評審系統</h1>
            </div>
        </div>
        <div >
            <div class="col-xs-2 col-sm-2"></div>
            <div id="user-console" class="col-xs-8 col-sm-8 col-md-8">

            </div>
            <div class="col-xs-2 col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4"></div>
            <div class="col-xs-4 col-sm-4">
                <!--<a type="button" class="btn  btn-info" data-type="submit" href="#" id="score-button" style="display:none;" >提交</a>-->
            </div>
            <div class="col-xs-4 col-sm-4">

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
