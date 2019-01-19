<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Member</title>
</head>
<section>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Member
        </div>

        <div class="links">
            <a href="addmember">新增</a>
        </div>

        <table class="links" border="1">
            <tr>
                <td>照片</td>
                <td>中文名字</td>
                <td>英文名字</td>
                <td>動作</td>
            </tr>

            @foreach($members as $member)
                <tr>
                    <td width="200px"><img src='pic/{{$member->photo}}' alt="{{$member->photo}}" height="200"></td>
                    <td width="200px">{{$member->name_ch}}</td>
                    <td width="200px">{{$member->name_en}}</td>
                    <td width="200px">
                        <div class="links"><a href="modifymember/{{$member->id}}">修改</a></div>
                        <div class="links"><a href="deletemember/{{$member->id}}">刪除</a></div>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
</div>

</body>
</section>
</html>
