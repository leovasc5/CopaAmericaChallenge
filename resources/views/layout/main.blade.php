<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400&family=Signika:wght@400&display=swap" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/topBar.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link href="/img/copa_america_ico.ico" type="image/x-icon" rel="icon"/>
        <title>@yield('title')</title>
    </head>
    <body>

    @yield('topBar')
    <div class="topnav">
      <a id="logo"><img src="/img/copa_america_logo.png" style="max-width:40px;"/></a>
      <a class="active">Home</a>
      <a href="#news">Jogar</a>
      <a href="#contact">Sair</a>
      <a id="text">COPA AMERICA CHALLENGE</a>
    </div>

    @yield('content')

    @yield('footer')
    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="https://github.com/leovasc5/"><i class="icon ion-social-github"></i></a>
                <a href="https://www.linkedin.com/in/leonardo-vasconcelos-paulino-7a0b41200/"><i class="icon ion-social-linkedin"></i></a>
                <a href="https://www.twitter.com/leovasc5/"><i class="icon ion-social-twitter"></i></a>
                <a href="https://www.instagram.com/leovasc5/"><i class="icon ion-social-instagram"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="mailto: leovasc5@hotmail.com">E-mail</a></li>
            </ul>
            <p class="copyright">Leonardo Vasconcelos Paulino - 2021</p>
        </footer>
    </div>

    <script src="/js/topBar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    </body>
</html>