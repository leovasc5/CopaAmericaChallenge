@extends('layout.main')
@section('title', 'CAC - Jogo')

@section('topBar')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/jogo/matamata/format.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/scrollBar.css')?>" type="text/css">
<script src="../js/jogo/semi.js"></script>

    <center>
    <br><br><br>
    <br><br>
    <h2>SEMIFINAIS</h2>
    <div class="wrapper">
        <input type="radio" name="final1" value="{{$semi1}}" id="option-1" onclick="atualizaF1(this.value, '{{$semi2}}')">
        <input type="radio" name="final1" value="{{$semi2}}" id="option-2" onclick="atualizaF1(this.value, '{{$semi1}}')">
          <label for="option-1" class="option option-1">
            <div class="dot"></div>
            <span>
                 @if($semi1 == 'bolivia')
                    Bolívia
                @elseif($semi1 == 'colombia')
                    Colômbia
                @else
                    {{$semi1}}
                @endif
            </span>
             </label>
          <label for="option-2" class="option option-2">
            <div class="dot"></div>
            <span>
                @if($semi2 == 'bolivia')
                   Bolívia
               @elseif($semi2 == 'colombia')
                   Colômbia
               @else
                   {{$semi2}}
               @endif
           </span>
          </label>
    </div>

    <div class="wrapper">
        <input type="radio" name="final2" value="{{$semi3}}" id="option-3" onclick="atualizaF2(this.value, '{{$semi4}}')">
        <input type="radio" name="final2" value="{{$semi4}}" id="option-4" onclick="atualizaF2(this.value, '{{$semi3}}')">
          <label for="option-3" class="option option-3">
            <div class="dot"></div>
            <span>
                @if($semi3 == 'bolivia')
                   Bolívia
               @elseif($semi3 == 'colombia')
                   Colômbia
               @else
                   {{$semi3}}
               @endif
           </span>
             </label>
          <label for="option-4" class="option option-4">
            <div class="dot"></div>
            <span>
                @if($semi4 == 'bolivia')
                   Bolívia
               @elseif($semi4 == 'colombia')
                   Colômbia
               @else
                   {{$semi4}}
               @endif
           </span>
          </label>
    </div>

    <form action="../jogo/terceiro" method="POST">
        @csrf
        <input type='hidden' name='final1' id='final1'/>
        <input type='hidden' name='final2' id='final2'/>
        <input type='hidden' name='terceiro1' id='terceiro1'/>
        <input type='hidden' name='terceiro2' id='terceiro2'/>

        <input type='submit' class='botao' id='verifica' value='IR PARA AS DECISÕES' onclick="execute()" disabled></input>
    </form>
    </center>
<br><br>
<br><br>
@endsection

@section('footer')
@endsection