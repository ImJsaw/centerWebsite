@extends('layout.master')

@section('title', '遊戲大賽')

@section('content')


<div id="fullpage">
    <section class="section" id = "title-content" style="padding-bottom: 30px;">
    <div style="margin-top:100px;" class = "container">
        <div  class = "row">              
           <img src="/images/home_first.png" width="100%" height="auto">
        </div>
    </div>
</section>
    <!--

    <section class="section" id = "message-row">
        <div style="margin-top:20px;" class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="wrapper1">
                        <div class="row">
                            <div class="grid_4 col-xs-6 col-sm-4 col-md-4">
                                <div class="box1">
                                    <img class="message-img" src="images/igs_logo.png" alt="">
                                    <h4><a href="#">鈊象電子</a></h4>
                                    <p>鈊象電子將核心技術定位於遊戲的創新與研發，並以『創新科技、創意休閒』為企業精神標竿，希望隨著科技不斷進步，以創新的角度，不斷開發出深具創意的休閒產品，並不斷厚植遊戲產品研發及跨平台技術，使企業能夠永續經營。</p>
                                </div>
                            </div>

                            <div class="grid_4 col-xs-6 col-sm-4 col-md-4">
                                <div class="box1">
                                    <img class="message-img" src="images/ico/logos.jpg" alt="">
                                    <h4><a href="#">創造最新穎的玩法</a></h4>
                                    <span class="heading">不限遊戲類型，自由發揮。</span>
                                    <p>無論是天馬行空的幻想，抑或是精彩絕倫的戲碼，都可以在這裡看見！每一個參賽者都要拿出最棒的創意，贏取比賽！</p>
                                </div>
                            </div>

                            <div class="grid_4 col-xs-6 col-sm-4 col-md-4">
                                <div class="box1">
                                    <img class="message-img" src="images/ico/judge.png" alt="">
                                    <h4><a href="#">最公正的評審團隊</a></h4>
                                    <span class="heading">遊戲業界資深評審團隊</span>
                                    <p>評審團隊包含遊戲業界最資深的成員，讓這場比賽成為公平專業的典範。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   &nbsp;


    <section class="section" id="message-row">
        <div class="container">
            <div class = "row">
                <div>
                    <h1 id="slogan">2017年遊戲大賽圓滿落幕！</h1>
                </div>
            </div>

            <ul id="lightSlider">
                <li>
                    <img src="images/gallery/180116/1.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/2.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/3.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/4.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/5.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/6.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/7.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/8.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/9.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/10.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/11.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/12.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/13.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/14.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/15.JPG" alt="">
                </li>
                <li>
                    <img src="images/gallery/180116/16.JPG" alt="">
                </li>
            </ul>
        </div>
    </section>
    -->

    <section id="full_footer" class="section fp-auto-height">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; NTUSU G.A.M.E Center 2018. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#lightSlider").lightSlider({
            autoWidth: true,
            item: 1,
            enableDrag: false
        });

        $('#fullpage').fullpage({
            //options here
            autoScrolling:true,
            scrollHorizontally: true
        });
    });
</script>

@endsection
