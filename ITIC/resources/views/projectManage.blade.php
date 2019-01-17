@extends('layout.master')

@section('title', '後臺系統')


@section('content')
    <section>
        <div class="container" style="margin-top:150px;">
            <div class="row" >
                <div>
                    <h1 id="slogan">歡迎來到後台系統[專案]</h1>
                </div>
                <table border="1">
                    <tr>
                        <td>專案id</td>
                        <td>專案名稱</td>
                        <td>開始年分</td>
                        <td>結束年分</td>
                        <td>專案主持人</td>
                        <td>母專案id</td>
                        <td>簡介</td>
                    </tr>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{$project->id}}</td>
                            <td>{{$project->name}}</td>
                            <td>{{$project->start_year}}</td>
                            <td>{{$project->end_year}}</td>
                            <td>{{$project->leader_id}}</td>
                            @if( $project->mom_project_id == null)
                                <td>無</td>
                            @else
                                <td>{{$project->mom_project_id}}</td>
                            @endif
                            <td>{{$project->intro}}</td>
                        </tr>
                    @endforeach
                    　
                </table>
            </div>
        </div>
    </section>
@endsection
