<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/confirm.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header_inner">
                <div class="header-ttl">
                    <h1>FashionablyLate</h1>
                </div>
            </div>
        </header>
        <main>
            <div class="main-top">
                <div class="main-top_inner">
                    <h2 class="main-ttl">
                        Confirm
                    </h2>
                </div>
            </div>
            <div class="main-bottom">
                <div class="main-bottom_inner">
                    <form class="form" action="/thanks" method="post">
                        @csrf
                    <table class="confirm-table">
                        <tr class="confirm-table-item">
                            <th>お名前</th>
                            <td>
                            <input class="confirm_form-name-item" type="text" name="first_name" value="{{$contact['first_name']}}" readonly />
                            <input class="confirm_form-name-item" type="text" name="last_name" value="
                            {{$contact['last_name']}}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table-item">
                            <th>性別</th>
                            <td><input class="confirm_form-gender-item" type="text" name="gender" value="{{$contact['gender']}}" readonly /></td>
                        </tr>
                        <tr class="confirm-table-item">
                            <th>メールアドレス</th>
                            <td><input class="confirm_form-email-item" type="email" name="email" value="{{$contact['email']}}" readonly /></td>
                        </tr>
                        <tr class="confirm-table-item">
                            <th>電話番号</th>
                            <td><input class="confirm_form-tel-item" type="tel" name="tell" value="{{$contact['first-tel']}}{{$contact['second-tel']}}{{$contact['third-tel']}}" readonly /></td>
                        </tr>
                        <tr class="confirm-table-item">
                            <th>住所</th>
                            <td><input class="confirm_form-address-item" type="text" name="address" value="{{$contact['address']}}" readonly /></td>
                        </tr>
                        <tr class="confirm-table-item">
                            <th>建物名</th>
                            <td><input class="confirm_form-building-item" type="text" name="building" value="{{$contact['building']}}" readonly /></td>
                        </tr>
                        <tr class="confirm-table-item">
                            <th>お問い合わせの種類</th>
                            <td><input class="confirm_form-content-item" type="text" name="content" value="{{$contact['content']}}" readonly /></td>
                        </tr>
                        <tr class="confirm-table-item">
                            <th>お問い合わせ内容</th>
                            <td><input class="confirm_form-content-item" type="text" name="detail" value="{{$contact['detail']}}"
                                readonly /></td>
                        </tr>
                    </table>
                    <div class="confirm_form__bottom">
                        <button class="form__button-submit" type="submit">送信</button>
                        <button class="form__button-submit--right" type="submit"><a href="/">修正</a></button>
                    </div>
                </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>