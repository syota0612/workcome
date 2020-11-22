<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>トップページ</title>
</head>
<body>
    {{-- ⬇︎ここからheader --}}
    <div class="header">
        <div class="header_title">workcome</div>
        <div class="header_menu">
            <ul>
                <li>search</li>
                <li>infomation</li>
                <li>contents</li>
                <li>login</li>
            </ul>
        </div>
    </div>
    {{-- ⬆︎ここまでheader --}}

    {{-- ⬇︎ここからcontent --}}
        <div class="content">
           <div class="content_title">
               さまざまなアイデアをお持ちの方<br>
               斬新なアイデアをお探しの方<br>
               ここなら全てが見つかります<br>
            </div>
        </div>
    {{-- ⬆︎ここまでcontent --}}

    {{-- ⬇︎ここからfotter --}}
        <div class="footer">
            <div class="fotter_copyright">© 2020 SyotaKondo</div>
        </div>
    {{-- ⬆︎ここまでfotter --}}

</body>
</html>
