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
        <div>
            <form method="post" action="{{ route('inquiry.store') }}">
            @csrf

            <div class="form-list">
                <label for="id_fullname">お名前 <span class="badge badge-danger">必須</span></label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="お名前" data-required="true" data-maxlength="32">
                @if ($errors->has('name'))
                <p class="error badge badge-danger">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <div class="form-list">
                <label for="id_mail">メールアドレス <span class="badge badge-danger">必須</span></label>
                <input type="text" name="email" value="{{ old('email') }}" placeholder="メールアドレス" data-required="true" data-minlength="3" data-maxlength="256">
                @if ($errors->has('email'))
                <p class="error badge badge-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="form-list">
                <label for="id_message">お問い合わせ内容 <span class="badge badge-danger">必須</span></label>
                <textarea name="msg" placeholder="お問い合わせ内容" data-required="true" data-maxlength="128">{{ old('msg') }}</textarea>
                @if ($errors->has('msg'))
                <p class="error badge badge-danger">{{ $errors->first('msg') }}</p>
                @endif
            </div>

            <button type="submit">送信</button>
        </form>
    <script src="js/realtime-validation.js"></script>
    </body>
</html>
