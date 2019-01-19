<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Member</title>
</head>
<body>
<section>
    <div>Add Member</div>

    <div>
        <form method="POST" enctype="multipart/form-data" action="/checkmember/{{$members->first()->id}}">
            {{ csrf_field() }}
            <div>
                <input id="Name_ch" type="text" name="name_ch" value="{{$members->first()->name_ch}}">
            </div>

            <div>
                <input id="Name_en" type="text" name="name_en" value="{{$members->first()->name_en}}">
            </div>

            <div>
                <select name="position_id">
                    <option value="{{$members->first()->position_id }}">
                        @if(($members->first()->position_id)==1)
                            Professor
                        @elseif(($members->first()->position_id)==2)
                            Ph.D's Degree
                        @elseif(($members->first()->position_id)==3)
                            Master's Degree
                        @endif
                    </option>
                    <option value="1">Professor</option>
                    <option value="2">Ph.D's Degree</option>
                    <option value="3">Master's Degree</option>
                </select>
            </div>

            <div>
                <img src='../pic/{{$members->first()->photo}}' alt="{{$members->first()->photo}}" height="200">
                <div id="doc-console">
                    <input type="file" name="photo" id="photo">
                </div>
            </div>

            <div>
                <textarea name="info" cols="50" rows="5">{{$members->first()->info }}</textarea>
            </div>

            <div>
                <input id="website" type="url" value="{{$members->first()->website}}" name="website">
            </div>

            <div>
                <input id="tel" type="text" name="tel" value="{{$members->first()->tel}}">
            </div>

            <div>
                <input id="email" type="text" value="{{$members->first()->email}}" name="email">
            </div>

            <div>
                <select name="identity">
                    <option value="{{$members->first()->identity }}">
                        @if($members->first()->identity==0)
                            Professor
                        @elseif($members->first()->identity==1)
                            Member
                        @endif
                    </option>
                    <option value="0">Professor</option>
                    <option value="1">Member</option>
                </select>
            </div>

            <input type="submit" value="送出修改">

        </form>
    </div>
</section>
</body>
</html>
