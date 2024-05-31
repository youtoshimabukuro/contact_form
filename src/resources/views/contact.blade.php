<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
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
                        Contact
                    </h2>
                </div>
            </div>
            <div class="main-bottom">
                <div class="main-bottom_inner">
                    <form class="Contact_form" action="/confirm" method="post">
                        @csrf
                        <div class="Contact_form-item">
                            <div class="Contact_form-ttl">
                                <span class="Contact_form-label">お名前</span>
                                <span class="Contact_form-label--required">※</span>
                            </div>
                            <div class="Contact_form-name">
                                <input class="Contact_form-name-item" type="text" name="last_name" placeholder="例)山田" />
                                <input class="Contact_form-name-item" type="text" name="first_name"
                                    placeholder="例)太郎" />
                            </div>
                        </div>
                        <div class="Contact_form-item">
                            <div class="Contact_form-ttl">
                                <span class="Contact_form-label">性別</span>
                                <span class="Contact_form-label--required">※</span>
                            </div>
                            <div class="Contact_form-radio">
                                <label for="man" class="Contact_form-radio-item">
                                    <input id="man" type="radio" name="gender" value="男性" /> 男性
                                </label>
                                <label for="woman" class="Contact_form-radio-item">
                                    <input id="woman" type="radio" name="gender" value="女性" /> 女性
                                </label>
                                <label for="other" class="Contact_form-radio-item">
                                    <input type="radio" name="gender" value="その他" /> その他
                                </label>
                            </div>
                        </div>
                        <div class="Contact_form-item">
                            <div class="Contact_form-ttl">
                                <span class="Contact_form-label">メールアドレス</span>
                                <span class="Contact_form-label--required">※</span>
                            </div>
                            <div class="Contact_form-email">
                                <input class="Contact_form-email-item" type="email" name="email"
                                    placeholder="例)test@example.com" />
                            </div>
                        </div>
                        <div class="Contact_form-item">
                            <div class="Contact_form-ttl">
                                <span class="Contact_form-label">電話番号</span>
                                <span class="Contact_form-label--required">※</span>
                            </div>
                            <div class="Contact_form-tel">
                                <input class="Contact_form-tel-item" type="tel" name="first-tel" placeholder="080" />
                                <input class="Contact_form-tel-item" type="tel" name="second-tel" placeholder="1234" />
                                <input class="Contact_form-tel-item" type="tel" name="third-tel" placeholder="5678" />
                            </div>
                        </div>
                        <div class="Contact_form-item">
                            <div class="Contact_form-ttl">
                                <span class="Contact_form-label">住所</span>
                                <span class="Contact_form-label--required">※</span>
                            </div>
                            <div class="Contact_form-address">
                                <input class="Contact_form-address-item" type="text" name="address"
                                    placeholder="例)東京都渋谷区千駄ヶ谷1-2-3" />
                            </div>
                        </div>
                        <div class="Contact_form-item">
                            <div class="Contact_form-ttl">
                                <span class="Contact_form-label">建物名</span>
                            </div>
                            <div class="Contact_form-building">
                                <input class="Contact_form-building-item" type="text" name="building"
                                    placeholder="例)千駄ヶ谷マンション101" />
                            </div>
                        </div>
                        <div class="Contact_form-item">
                            <div class="Contact_form-ttl">
                                <span class="Contact_form-label">お問い合わせの種類</span>
                                <span class="Contact_form-label--required">※</span>
                            </div>
                            <div class="Contact_form-categories">
                                <select class="Contact_form-categories-item" name="content">
                                    <option value="">選択してください</option>
                                    <option value="商品のお届けについて">商品のお届けについて</option>
                                    <option value="商品の交換について">商品の交換について</option>
                                    <option value="商品のトラブル">商品のトラブル</option>
                                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                                    <option value="その他">その他</option>
                                </select>
                            </div>
                        </div>
                        <div class="Contact_form-item">
                            <div class="Contact_form-ttl">
                                <span class="Contact_form-label">お問い合わせ内容</span>
                                <span class="Contact_form-label--required">※</span>
                            </div>
                            <div class="Contact_form-detail">
                                <textarea class="Contact_form-detail-item" name="detail"
                                    placeholder="お問い合わせ内容をご記載ください"></textarea>
                            </div>
                        </div>
                        <div class="Contact_form-button">
                            <button class="Contact_form-button-item" type="submit">確認画面</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>