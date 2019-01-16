@extends('layout.master')

@section('title', '遊戲大賽')

@section('content')

    <section style="height: calc( 100vh - 400px);">
        <div style="margin-top:150px;" class = "container">
            <div class = "row">
                <div>
                    @if(  session()->get('error') )
                        <script>alert("登入失敗")</script>
                    @endif

                    @if(  session()->get('pass') )
                        <script>alert("密碼修改成功!!\r請重新登入")</script>
                    @endif
                    <h1 id="slogan">請登入系統</h1>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('login') }}">
            <div class="container">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" placeholder="帳號" name="username">
                    </div>
                    <div class="col-xs-4"></div>
                </div>

                <div class="row">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                        <input type="password" class="form-control" placeholder="密碼" name="password">
                    </div>
                    <div class="col-xs-4"></div>
                </div>

                <div class="row">
                    <div class="col-xs-4"></div>
                    <div align="center" class="buttons-wrapper col-xs-4">
                        <button type="submit" class="btn  btn-info" name="login">登入</button>
                    </div>
                    <div class="col-xs-4"></div>
                </div>
            </div>
        </form>
    </section>

    <section>
        <div class="row">
            <div>
                <p></p>
            </div>
        </div>
    </section>


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

@endsection
