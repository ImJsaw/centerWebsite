
@extends('layout.master')

@section('title', '遊戲大賽')

@section('content')

<!--<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Portfolio</h1>
                        <p>Be Creative</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!--/#action-->

<section id="portfolio">
    <!--row 1 start-->
    <div class="row">
        <div class="portfolio-items">
            <div style="padding:70px 20px;"></div>
                <?php
                $cnt = 0;
                $data = DB::table('collections2017')->get();
                $row = "SELECT count(*) FROM `collections2017`;";
                $count= $row[0];
                ?>
            @while($cnt<24)
                <div class="row">
                    <div class="portfolio-items">

                        @for($i=1; $i<=4; $i++)
                            <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src='<?php echo $data[$cnt]->picPath; ?>' height="300" width="500" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            @if($data[$cnt]->honor!=" ")
                                                <div style="padding:50px 20px;">
                                                </div>
                                                 <h2 class="float-top"><?php echo $data[$cnt]->honor; ?></h2>
                                             @endif
                                            <ul class="nav nav-pills">
                                                <li><a href='<?php echo $data[$cnt]->pdfLink; ?>'><i class="fa fa-link"></i></a></li>
                                                <li><a href='<?php echo $data[$cnt]->videoLink; ?>'><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $cnt++; ?>

                        @endfor
                        @if(($i+1)%4==0)
                            <?php echo '<br>'; ?>
                        @endif
                    </div>
                </div>

            @endwhile

        </div>
    </div>

</section>
&nbsp;
<section id = "title-content">
    <div class = "container">
        <div class = "row">
            <div>
                <h1 id="slogan"><a href="FirstStage-Public.xlsx">初審成績</a></h1>
            </div>
        </div>
    </div>
</section>
&nbsp;
<section id = "title-content">
    <div class = "container">
        <div class = "row">
            <div>
                <h1 id="slogan"><a href="award.jpg">得獎名單</a></h1>
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
