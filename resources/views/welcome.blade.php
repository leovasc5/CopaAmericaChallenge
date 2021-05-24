<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&family=Signika:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/welcome.css">
        <link href="/img/copa_america_ico.ico" type="image/x-icon" rel="icon"/>
        <title>Copa America Challenge</title>
    </head>
    <body>
    <div class="container">
        <h1>
            <center>
            <img src="img/copa_america_logo.png" onclick="location.href='#menu'" style="max-width: 200px; cursor:pointer;"/>
            </center>
            <br>
           <a href="#menu" value='Clique aqui!'>Copa America Challenge</a>
        </h1>
           
       <div class="popover" id="menu">
        <div class = 'content'>
         <a href="#" class="close"></a>
          <div class = 'nav'>
           <ul class = 'nav_list'>
             
             <div class = 'nav_list_item'>
             <li><a href="/convidado/grupos">Jogar (Convidado)</a></li>
             </div>
            <div class = 'nav_list_item'>
               <li><a href="/login">Login</a></li>
             </div>
           <div class = 'nav_list_item'>
             <li><a href="/register">Cadastrar-se</a></li>
           </div>
           </ul>
         </div>
        </div>
        </div>
        </div>
    </body>
</html>