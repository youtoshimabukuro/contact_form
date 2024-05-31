<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('common.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header_inner">
                <div class="header-ttl">
                    <h1>FashionablyLate</h1>
                </div>
                @yield('btn')
            </div>
        </header>
        <main>
            @yield('main')
        </main>
    </div>
</body>

</html>