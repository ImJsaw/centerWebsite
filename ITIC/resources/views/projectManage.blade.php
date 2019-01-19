@extends('layout.master')

@section('title', '後臺系統')


@section('content')
    <section>
        <div class="container" style="margin-top:150px;">
            <div class="row" >
                <div>
                    <h1 id="slogan">歡迎來到後台系統[專案]</h1>
                </div>
                <table border="5">
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
                            <td>
                                <button onclick="getProject(this)" data-project-id = "{{$project->id}}">修改</button>
                            </td>
                        </tr>
                    @endforeach
                </table>


                <div id="editForm" style="display:none">
                    {{Form::open(array('route' => 'editProject'))}}
                    <input type="hidden" name="id" value="project-id" id="pID">
                    <table class="table" >
                        <tr>
                            <td width="100px">
                                專案名稱
                            </td>
                            <td>
                                <input type="text" name="name" id="pName" >
                            </td>
                        </tr>
                        <tr>
                            <td width="100px">
                                專案簡介
                            </td>
                            <td>
                                <textarea name="intro" id="pIntro" cols="20" rows="5">
                                </textarea>
                            </td>
                        </tr>
                    </table>
                    <div class="buttons-wrapper col-xs-4">
                        {{Form::submit('submit')}}
                    </div>
                    {{Form::close()}}
                </div>


            </div>
        </div>

        <script>
            function getProject(self){
                $("#editForm").show();
                $.ajax({
                    type:'get',
                    url:'/manage/project/'+ $(self).data('project-id') ,
                    data:'_token = <?php echo csrf_token() ?>',
                    success:function(data){
                        $("#id").html(data.project.id);
                        $("#name").html(data.project.name);
                        $("#intro").html(data.project.intro);
                        $("#pName").attr('value',data.project.name);
                        $("#pIntro").html(data.project.intro);
                    }
                });
            }
        </script>
    </section>
@endsection
