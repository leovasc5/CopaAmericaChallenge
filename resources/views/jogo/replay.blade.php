@extends('layout.main')
@section('title', 'CAC - Replay')

@section('topBar')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/jogo/replay.css')?>" type="text/css">
    <div class="container">
        <h3>Você deseja refazer seu chaveamento da Copa América?</h3>
        <a>Sim</a> <a>Não</a>
    </div>
@endsection

@section('footer')
@endsection