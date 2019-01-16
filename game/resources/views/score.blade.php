
@extends('layout.master')

@section('title', '遊戲大賽')

@section('content')

    <setion>
        <div class="container" style="margin-top:150px;">

            <table class="table">
                <td width="200px">Upload Group</td>
                <td ><div style="margin-left:40px;"> Video </div></td>
                <td ><div style="margin-left: 100px;"> File </div></td>
                <td width="400px"><div style="margin-left:35px;"> Score </div></td>

            </table>


        <form method="POST" action="/{{$school}}" target="_top">
            <table class="table" >
            @foreach($uploaders as $uploader)
                @if(($uploader->identity)=='upload' && (($uploader->school) == $school))
                <tr>
                    <td width="200px">{{$uploader->username}}</td>
                    @if($uploader->data!=null)
                        <td ><a href="{{$uploader->data->youtube}}" >影片連結 </a></td>
                        <td ><a href="/pdffile/{{$uploader->data->file}}" download="{{$uploader->data->file}}" style="margin-left: 40px;"> 檔案下載 </a></td>
                    @else
                        <td width="200px"> 尚未上傳 </td>
                        <td width="200px"><div style="margin-left: 40px;"> 尚未上傳 </div></td>
                    @endif
                    <td width="400px">
                            {{ csrf_field() }}
                            <div class="row">
                                <div id="user-console" class="col-xs-4 col-sm-4">
                                        <input type="text" class="form-control" placeholder="{{optional($scoreuser->where('upload',$uploader->username)->where('judge',$judge)->first())->score }}" name="score[]">
                                    <input type="hidden" name="school-group[]" value="{{$uploader->username}}">
                                </div>
                            </div>
                    </td>
                </tr>
                @endif
            @endforeach
            </table>
            <div class="buttons-wrapper col-xs-4">
                    <button type="submit" class="btn  btn-info" name="upload" id="upload-button">submit</button>
            </div>
        </form>
    </div>
</setion>

    @endsection
