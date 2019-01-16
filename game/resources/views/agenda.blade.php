@extends('layout.master')

@section('title', '遊戲大賽')

@section('content')



<!--/#action-->

<section id = "log-in">
    <div class="container">
        <div class = "row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 padding-top">
                <h2 class="page-header">重要日程</h2>
                <table border="0">
                    <tbody>
                    <tr>
                        <td>12/31</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>影片上傳截止</td>
                    </tr>
                    <tr>
                        <td>1/16</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>workshop開始</td>
                    </tr>
                    <tr>
                        <td>地點：台灣科技大學</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>IB - 101</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class = "row">
            <div class="col-sm-3"></div>
            <div class="col-sm-7 padding-top">
                <h2 class="page-header">議程表</h2>

                <table border="2" style="width: 100%;">
                    <tbody>
                    <tr>
                        <td colspan="4" style="text-align:center">Session 1(9:00 - 10:30)</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 1&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;清華 <b>Fallen Two</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 2&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;台大 <b>大人國冒險</b>&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 3&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;政大 <b>Under the Dome</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 4&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;台科 <b>Refuge</b>&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 5&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;清華 <b>Clash on the Sea</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 6&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;台大 <b>Beach House 四象之間</b>&nbsp;&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="4" style="text-align:center">Coffee Break(10:30 - 10:50)</td>
                    </tr>

                    <tr>
                        <td colspan="4" style="text-align:center">Session 2(10:50 - 12:20)</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 1&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;清華 <b>Sweet Battle</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 2&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;台大 <b>Gerritory&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 3&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;台科 <b>Wind Breaker</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 4&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;清華 <b>FAR FAR AWAY – B612</b>&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 5&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;北藝 <b>杜埃之戰</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 6&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;北科 <b>SIGHT.</b>&nbsp;&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="4" style="text-align:center">Lunch Break(12:20 - 13:30)</td>
                    </tr>

                    <tr>
                        <td colspan="4" style="text-align:center">Session 3(13:30 - 15:00)</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 1&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;台大 <b>3D塔防</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 2&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;清華 <b>反擊吧!!毬毬!!</b>&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 3&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;政大 <b>CROSS</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 4&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;清華 <b>Death Race</b>&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 5&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;台科大 <b>Rabbit Fly</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 6&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;台大 <b>Animal War</b>&nbsp;&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="4" style="text-align:center">Coffee Break(15:00 - 15:20)</td>
                    </tr>

                    <tr>
                        <td colspan="4" style="text-align:center">Session 4(15:20 - 16:50)</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 1&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;清華 <b>Box Adventure</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 2&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;台大 <b>Phycholacquers</b>&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 3&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;北科 <b>我不想當動物了</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 4&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;台科 <b>CuBattle</b>&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;Team 5&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;清華 <b>Parallel Universe</b>&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;Team 6&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;台大 <b>Vomit Simulator</b>&nbsp;&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="4" style="text-align:center">評審會議(16:50 - 17:00)</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">頒獎(17:00 - 18:00)</td>
                    </tr>

                    </tbody>
                </table>
                &nbsp;
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

@endsection
