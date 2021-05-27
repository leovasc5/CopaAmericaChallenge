@extends('layout.main')
@section('title', 'CAC - Convidado')

@section('topBar')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/jogo/matamata/format.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/scrollBar.css')?>" type="text/css">
<script src="../js/jogo/terceiro.js"></script>

    <center>
    <br><br><br>
    <br><br>
    <h2>3º LUGAR</h2>
    <div class="wrapper">
        <input type="radio" name="final1" value="{{$terceiro1}}" id="option-1" onclick="atualizaT(this.value)">
        <input type="radio" name="final1" value="{{$terceiro2}}" id="option-2" onclick="atualizaT(this.value)">
          <label for="option-1" class="option option-1">
            <div class="dot"></div>
            <span>
                 @if($terceiro1 == 'bolivia')
                    Bolívia
                @elseif($terceiro1 == 'colombia')
                    Colômbia
                @else
                    {{$terceiro1}}
                @endif
            </span>
             </label>
          <label for="option-2" class="option option-2">
            <div class="dot"></div>
            <span>
                @if($terceiro2 == 'bolivia')
                   Bolívia
               @elseif($terceiro2 == 'colombia')
                   Colômbia
               @else
                   {{$terceiro2}}
               @endif
           </span>
          </label>
    </div>

    <form action="../convidado/final" method="POST">
        @csrf
        <input type='hidden' name='final1' id='final1' value="{{$final1}}"/>
        <input type='hidden' name='final2' id='final2' value="{{$final2}}"/>
        <input type='hidden' name='terceiro' id='terceiro'/>
        
        <input type='submit' class='botao' id='verifica' value='IR PARA AS DECISÕES' onclick="execute()" disabled></input>
    </form>
    </center>
<br><br>
<br><br>
<br><br>
<br>
@endsection

@section('footer')
@endsection