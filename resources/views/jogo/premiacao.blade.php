@extends('layout.main')
@section('title', 'CAC - Convidado')

@section('topBar')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/jogo/matamata/format.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/scrollBar.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/jogo/matamata/premiacao.css')?>" type="text/css">

    <center>
    <br><br><br>

    <h1>Campeão: {{$campeao}}</h1>
 
    <div class="podium">
        <table id="ladder">
          <tr>
            @if($campeao == 'argentina')
                <img src='../img/times/argentina.jpg' width="200px">
            @elseif($campeao == 'brasil')
                <img src='../img/times/brasil.jpg' width="200px">
            @elseif($campeao == 'bolivia')
                <img src='../img/times/bolivia.png' width="200px">
            @elseif($campeao == 'chile')
                <img src='../img/times/chile.jpg' width="200px">
            @elseif($campeao == 'colombia')
                <img src='../img/times/colombia.jpg' width="200px">
            @elseif($campeao == 'equador')
                <img src='../img/times/equador.jpg' width="200px">
            @elseif($campeao == 'paraguai')
                <img src='../img/times/paraguai.jpg' width="200px">
            @elseif($campeao == 'peru')
                <img src='../img/times/peru.jpg' width="200px">
            @elseif($campeao == 'venezuela')
                <img src='../img/times/venezuela.png' width="200px">
            @elseif($campeao == 'uruguai')
                <img src='../img/times/uruguai.jpg' width="200px">
            @endif

            <td>{{$vice}}<div id="podium1">2º</div></td>
        
            <td>{{$campeao}}<div id="podium0">1º</div></td>
            
            <td>{{$terceiro}}<div id="podium2">3º</div></td>
          </tr>
       </table>
      </div>
    </center>
<br><br>
<br><br>
<br>
@endsection

@section('footer')
@endsection