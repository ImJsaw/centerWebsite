<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Member</title>
</head>
<section>
<body>

    <div>Modify Member</div>

    <div>
        <form method="POST" enctype="multipart/form-data" action="/uploadmember">
            {{ csrf_field() }}
            <div>
                <input id="Name_ch" type="text" placeholder="中文名字" name="name_ch">
            </div>

            <div>
                <input id="Name_en" type="text" placeholder="英文名字" name="name_en">
            </div>

            <div>
                <select name="position_id">
                    <option value="1">Professor</option>
                    <option value="2">Ph.D's Degree</option>
                    <option value="3">Master's Degree</option>
                </select>
            </div>

            <div>
                <div id="doc-console">
                    <input type="file" name="photo" id="photo">
                </div>
            </div>

            <div>
                {{--<input id="info" type="text" placeholder="簡介" name="info" style="width:300px;height:100px;">--}}
                <textarea name="info" cols="50" rows="5">簡介</textarea>
            </div>

            <div>
                <input id="website" type="url" placeholder="個人網頁" name="website">
            </div>

            <div>
                <input id="tel" type="text" placeholder="電話號碼" name="tel">
            </div>

            <div>
                <input id="email" type="text" placeholder="電子郵件" name="email">
            </div>

            <div>
                <select name="identity">
                    <option value="0">Professor</option>
                    <option value="1">Member</option>
                </select>
            </div>

            <input type="submit" value="送出表單">

        </form>
    </div>
</body>
</section>
</html>
