<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header_inner">
                <div class="header-ttl">
                    <h1>FashionablyLate</h1>
                </div>
                <div class="header-btn">
                    <a style="text-decoration: none;"  href="/register">register</a>
                </div>
            </div>
        </header>
        <main>
            <div class="main-top">
                <div class="main-top_inner">
                    <h2 class="main-ttl">
                        Login
                    </h2>
                </div>
            </div>
            <div class="main-bottom">
                <div class="main-bottom_inner">
                    <form class="register_form" class="form" action="/login" method="post">
                        @csrf
                        <div class="register_form-top">
                            <div class="register_form-item">
                                <h4 class="register_form-label">メールアドレス</h4>
                                <input class="register_form-input" type="email" name="email" value="{{ old('email') }}" placeholder="例)text@example.com">
                                @if ($errors->has('email'))
                                    {{$errors->first('email')}}
                                @endif
                            </div>
                            <div class="register_form-item">
                                <h4 class="register_form-label">パスワード</h4>
                                <input class="register_form-input" type="password" name="password" placeholder="例)coachtech1106">
                                @if ($errors->has('password'))
                                    {{$errors->first('password')}}
                                @endif
                            </div>
                        </div>
                        <div class="register_form-bottom">
                            <button class="register_form-button" type="submit">ログイン</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>