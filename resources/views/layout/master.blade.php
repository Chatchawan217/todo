<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', "My website")</title>
</head>
<body>
    <header><a href="/">หน้าแรก</a> | <a href="/contact">ติดต่อ</a> | <a href="/about">เกี่ยวกับ</a></header>
    <hr>
    <div>
        @yield("content")
    </div>
    <hr>
    <p>Credit by SinV</p>
</body>
</html>
