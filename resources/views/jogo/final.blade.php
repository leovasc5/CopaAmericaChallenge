@extends('layout.main')
@section('title', 'CAC - Jogo')

@section('topBar')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/jogo/matamata/format.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/scrollBar.css')?>" type="text/css">
<script src="../js/jogo/final.js"></script>

    <center>
    <br><br><br>
    <br><br>
    <h2>FINAL</h2>
    <div class="wrapper">
        <input type="radio" name="final1" value="{{$final1}}" id="option-1" onclick="atualizaF(this.value, '{{$final2}}')">
        <input type="radio" name="final1" value="{{$final2}}" id="option-2" onclick="atualizaF(this.value, '{{$final1}}')">
          <label for="option-1" class="option option-1">
            <div class="dot"></div>
            <span>
                 @if($final1 == 'bolivia')
                    Bolívia
                @elseif($final1 == 'colombia')
                    Colômbia
                @else
                    {{$final1}}
                @endif
            </span>
             </label>
          <label for="option-2" class="option option-2">
            <div class="dot"></div>
            <span>
                @if($final2 == 'bolivia')
                   Bolívia
               @elseif($final2 == 'colombia')
                   Colômbia
               @else
                   {{$final2}}
               @endif
           </span>
          </label>
    </div>

    <form action="../jogo/premiacao" method="POST">
        @csrf
        <input type='hidden' name='campeao' id='campeao'/>
        <input type='hidden' name='vice' id='vice'/>
        <input type='hidden' name='terceiro' id='terceiro' value="{{$terceiro}}"/>
        
        <input type='submit' class='botao' id='verifica' value='FINALIZAR JOGO' onclick="execute()" disabled></input>
    </form>
    </center>
<br><br>
<br><br>
<br><br>
<br>
@endsection

@section('footer')
@endsection