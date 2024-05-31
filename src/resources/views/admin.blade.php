<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header_inner">
                <div class="header-ttl">
                    <h1>FashionablyLate</h1>
                </div>
                <button class="header-btn">
                    logout
                </button>
            </div>
        </header>
        <main>
            <div class="main-top">
                <div class="main-top_inner">
                    <h2 class="main-ttl">
                        Admin
                    </h2>
                </div>
            </div>
            <div class="main-bottom">
                <div class="main-bottom_inner">
                    <form class="admin_form">
                        <div class="admin_form-search">
                            <input class="admin_form-search-item" type="search" name="search" placeholder="名前やメールアドレスを入力してください">
                        </div>
                        <div class="admin_form-gender">
                            <select class="admin_form-gender-item" name="gender">
                                <option value="">性別</option>
                                <option value="text">男性</option>
                                <option value="text">女性</option>
                                <option value="text">その他</option>
                            </select>
                        </div>
                        <div class="admin_form-kinds">
                            <select class="admin_form-kinds-item" name="kinds">
                                <option value="">お問い合わせの種類</option>
                                <option value="text">商品の交換について</option>
                                <option value="商品のお届けについて">商品のお届けについて</option>
                                <option value="商品の交換について">商品の交換について</option>
                                <option value="商品のトラブル">商品のトラブル</option>
                                <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <div class="admin_form-date">
                            <input type="date" class="admin_form-date-item">
                        </div>
                        <div class="admin_form-btn_search">
                            <button class="admin_form-btn_search-item" type="submit">検索</button>
                        </div>
                        <div class="admin_form-btn_reset">
                            <button class="admin_form-btn_reset-item" type="submit">リセット</button>
                        </div>
                    </form>
                    <div class="middle">
                        <div class="admin_btn_export">
                            <button class="admin_btn_export-item">エクスポート</button>
                        </div>
                        <div class="pagination">
                            
                        </div>
                    </div>
                    <table class="admin_table">
                            <tr>
                                <th class="admin_table-name-label">お名前</th>
                                <th class="admin_table-gender-label">性別</th>
                                <th class="admin_table-email-label">メールアドレス</th>
                                <th class="admin_table-kinds-label">お問い合わせの種類</th>
                                <th class="admin_table-noname-label"></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>