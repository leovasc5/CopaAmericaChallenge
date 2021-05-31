@extends('layout.main')
@section('title', 'CAC - Home')

@section('topBar')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/jogo/matamata/premiacao.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/scrollBar.css')?>" type="text/css">
<br>
<h1 style="text-align:center;text-transform: none;">TOP 3 dos outros usuários</h1>
@foreach($chav as $cha)
    <center>
    <br><br>

    <h2 style="text-transform: capitalize;">{{$cha->campeao}}</h2> <label>Campeão</label>
 
    <div class="podium">
        <table id="ladder">
          <tr>
            @if($cha->campeao == 'argentina')
                <img src='../img/times/argentina.jpg' width="150px">
            @elseif($cha->campeao == 'brasil')
                <img src='../img/times/brasil.jpg' width="150px">
            @elseif($cha->campeao == 'bolivia')
                <img src='../img/times/bolivia.png' width="150px">
            @elseif($cha->campeao == 'chile')
                <img src='../img/times/chile.jpg' width="150px">
            @elseif($cha->campeao == 'colombia')
                <img src='../img/times/colombia.jpg' width="150px">
            @elseif($cha->campeao == 'equador')
                <img src='../img/times/equador.jpg' width="150px">
            @elseif($cha->campeao == 'paraguai')
                <img src='../img/times/paraguai.jpg' width="150px">
            @elseif($cha->campeao == 'peru')
                <img src='../img/times/peru.jpg' width="150px">
            @elseif($cha->campeao == 'venezuela')
                <img src='../img/times/venezuela.png' width="150px">
            @elseif($cha->campeao == 'uruguai')
                <img src='../img/times/uruguai.jpg' width="150px">
            @endif

            <td style="height: 175px">
                @if($cha->vice == 'bolivia')
                   Bolívia
                @elseif($cha->vice == 'colombia')
                   Colômbia
                @else
                   {{$cha->vice}}
                @endif
                <div id="podium1" style="height: 100px">2º</div>
            </td>
        
            <td style="height: 175px">
                @if($cha->campeao == 'bolivia')
                   Bolívia
                @elseif($cha->campeao == 'colombia')
                   Colômbia
                @else
                   {{$cha->campeao}}
                @endif
                <div id="podium0" style="height: 130px">1º</div>
            </td>
            
            <td style="height: 175px">
                @if($cha->terceiro == 'bolivia')
                   Bolívia
                @elseif($cha->terceiro == 'colombia')
                   Colômbia
                @else
                   {{$cha->terceiro}}
                @endif
                <div id="podium2"  style="height: 70px">3º</div>
            </td>
          </tr>
       </table>
       <p>Criador: {{$cha->criador}}
      </div>
    </center>
    <br>
@endforeach
@endsection

@section('footer')