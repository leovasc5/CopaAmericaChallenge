@extends('layout.main')
@section('title', 'CAC - Replay')

@section('topBar')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/jogo/replay.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/scrollBar.css')?>" type="text/css">
<br><br><br>
    <center>
    <div class="container">
        <br>
        <h3>Você deseja refazer seu chaveamento da Copa América?</h3>
        <br>
        <form action="/excluir" method="POST">
            @csrf
            @method('DELETE')
            <button class="botao" id="sim" type="submit">Sim</button>
        </form>
        <button class="botao" id="nao" onclick="location.href='/dashboard'">Não</button>
    </div>
    </center>
    <br><br><br>
    <br><br><br>

@endsection

@section('footer')
@endsection