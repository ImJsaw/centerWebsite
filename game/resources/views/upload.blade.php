@extends('layout.master')

@section('title', '遊戲大賽')

@section('content')
    <section>
        <div class="container" style="margin-top:150px;">
            <div class="row" >
                <div>
                    <h1 id="slogan">歡迎來到上傳系統</h1>
                </div>
            </div>
            @if(  session()->get('upload') )
                <script>alert("上傳成功!")</script>
            @endif

            <form method="POST" enctype="multipart/form-data" action="/fileupload">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                        {{--<p align="center" style="font-size: 150%;">上傳說明請參考<a href="upload_info.pdf">上傳說明</a></p>--}}
                        <p align="center" style="font-size: 150%;">請確認<a href="#Video_URL">影片連結</a>及 <a href="#FILE_UPLOAD">檔案</a>皆填入</p>
                        <p align="center" style="font-size: 150%;">再行提交/修改</p>
                    </div>
                    <div class="col-xs-4"></div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-4"></div>
                    <div id="user-console" class="col-xs-4 col-sm-4">
                        <input id="Video_URL" type="url" class="form-control" placeholder="影片連結" name="youtube" @if(isset($video_url)) value="{{$video_url}}" @endif>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4 "></div>
                    <div id="doc-console" class="col-xs-4 col-sm-4">
                        {{--<input type="url" class="form-control" placeholder="檔案連結" name="file">--}}
                        <input id="FILE_UPLOAD" class="form-control" type="file" name="upload_file" id="upload_file">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4"></div>
                    <div align="center" class="buttons-wrapper col-xs-4">
                        <button type="submit" class="btn  btn-info" name="upload" id="upload-button">@if(isset($video_url))修改@else提交@endif</button>
                    </div>
                    <div class="col-xs-4"></div>
                </div>
            </form>

            <form style="margin-top: 15vh;" method="POST" enctype="multipart/form-data" action="/modifiedpass">
                {{ csrf_field() }}
                <h2 style="text-align: center;">密碼變更</h2>
                <div class="row">
                    <div class="col-xs-offset-4">
                        <label style="width: 100px;">新密碼</label>
                        <input style="color: black; width: 200px;" name="password" type="password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-4">
                        <label style="width: 100px;">再輸入一次</label>
                        <input style="color: black; width: 200px;" name="recheck" type="password">
                        <button id="pass_submit" type="submit" class="btn btn-info" disabled="true">變更修改</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-4">
                        <p id="match" style="color: yellow; margin-left: 100px;" hidden>兩次密碼不相符</p>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $('input[name=recheck]').change(function () {
                if(this.value != $('input[name=password]').val()){
                    $('#match').show();
                    $('#pass_submit').prop('disabled', true);
                }
                else {
                    $('#match').hide();
                    $('#pass_submit').prop('disabled', false);
                }
            });
        });

    </script>



@endsection
