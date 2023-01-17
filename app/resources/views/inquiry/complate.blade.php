<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>お問い合わせ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <p>送信完了しました。</p>
        <div>
            <labeL>お名前</label>
            {{ $inputs['name'] }}
        </div>

        <div>
            <labeL>メールアドレス</label>
            {{ $inputs['email'] }}
        </div>

        <div>
            <labeL>お問い合わせ内容</label>
            {{ $inputs['msg'] }}
        </div>
    </body>
</html>
