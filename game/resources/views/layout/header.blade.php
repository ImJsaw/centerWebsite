<!-- Main Header -->
<header id="header" style="background-color: rgb(10,5,44); color: white;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
                <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href="https://www.facebook.com/IGS1989/"><i style="margin-top:10px;" class="fa fa-facebook"></i></a></li>

                        @if(Auth::check())
                            <a type="button" class="btn  btn-warning" data-type="submit" href="{{ url('/login/logout') }}"  >登出</a>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="small-logo" href="/">
                    <h1><img src="images/logo1.png" alt="logo"></h1>
                </a>


            </div>
            <div class="collapse navbar-collapse">
                <a class="navbar-brand" id="big-logo" href="/">
                    <h1><img src="images/logo1.png" alt="logo"></h1>
                </a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">home</a></li>
                    <li class="dropdown">
                        <a href="#">games<i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a class="caption">Game Contest</a></li>
                            <li><a class="caption">Past Years</a></li>
                            <li><a href="gd2017">2017</a></li>
                            <li><a href="gd2016">2016</a></li>
                        </ul>
                    </li>
                    <li><a href="rules ">rule</a></li>
                    <li><a href="agenda ">agenda</a></li>

                    @if(Auth::check())
                        <?php $identity=Auth::User()->identity;?>
                        @if($identity=='upload')
                            <li><a href="logged">upload</a></li>
                        @elseif($identity=='judge')
                            <li><a href="logged">judge</a></li>
                        @endif
                    @else
                        <li><a href="login">login</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</header>
<!--/#header-->
