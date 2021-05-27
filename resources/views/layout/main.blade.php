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
      <a id="logo"><img src="/img/copa_america_ico.png" style="max-width:54px; margin-top:5px;"/></a>
      @auth
      <a class="active">Home</a>
      <a href="#news">Jogar</a>
      <form action="/logout" method="POST">
        @csrf
        <a href="/logout" onclick="event.preventDefault();
                          this.closest('form').submit();">Sair</a>
      </form>
      @endauth
      @guest
      <a href='/login'>Entrar</a>
      <a href='/register'>Cadastrar-se</a>
      <a href='/'>Sair</a>
      @endguest
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

    </body>
</html>