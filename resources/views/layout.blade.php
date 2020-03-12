<!DOCTYPE HTML>
<html lang="ja">

<head>

    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/article.index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/article.create.css') }}" rel="stylesheet">

    <script src="/js/app.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>

    @yield('content')

</body>

</html>
