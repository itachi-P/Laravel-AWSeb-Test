<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>ようこそいらっしゃいまし</title>
    <link rel="icon" href="{{ asset('fuca_tehepero_icon_32x32.ico') }}" sizes="32x32">
</head>
<body>
    Laravel-AWS Elastic Beanstalk デプロイテスト用ページ

    (仮)
    user_id: {{ $request->user_id }}

    <li><a href="{{ action('PostsController@home', $request) }}">投稿画像一覧（ホーム）</a></li>

</body>
</html>