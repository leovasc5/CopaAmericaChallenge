@extends('layout.main')
@section('title', 'CAC - Convidado')

@section('topBar')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/jogo/matamata/format.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/scrollBar.css')?>" type="text/css">
<script src="../js/jogo/quartas.js"></script>

    <center>
    <br>
    <h2>QUARTAS DE FINAL</h2>
    <div class="wrapper">
        <input type="radio" name="semi1" value="{{$b2}}" id="option-1" onclick='atualizaS1(this.value)'>
        <input type="radio" name="semi1" value="{{$a3}}" id="option-2" onclick='atualizaS1(this.value)'>
          <label for="option-1" class="option option-1">
            <div class="dot"></div>
            <span>
                 @if($b2 == 'bolivia')
                    Bolívia
                @elseif($b2 == 'colombia')
                    Colômbia
                @else
                    {{$b2}}
                @endif
            </span>
             </label>
          <label for="option-2" class="option option-2">
            <div class="dot"></div>
            <span>
                @if($a3 == 'bolivia')
                   Bolívia
               @elseif($a3 == 'colombia')
                   Colômbia
               @else
                   {{$a3}}
               @endif
           </span>
          </label>
    </div>

    <div class="wrapper">
        <input type="radio" name="semi2" value="{{$b1}}" id="option-3" onclick='atualizaS2(this.value)'>
        <input type="radio" name="semi2" value="{{$a4}}" id="option-4" onclick='atualizaS2(this.value)'>
          <label for="option-3" class="option option-3">
            <div class="dot"></div>
            <span>
                @if($b1 == 'bolivia')
                   Bolívia
               @elseif($b1 == 'colombia')
                   Colômbia
               @else
                   {{$b1}}
               @endif
           </span>
             </label>
          <label for="option-4" class="option option-4">
            <div class="dot"></div>
            <span>
                @if($a4 == 'bolivia')
                   Bolívia
               @elseif($a4 == 'colombia')
                   Colômbia
               @else
                   {{$a4}}
               @endif
           </span>
          </label>
    </div>

    <div class="wrapper">
        <input type="radio" name="semi3" value="{{$a2}}" id="option-5" onclick='atualizaS3(this.value)'>
        <input type="radio" name="semi3" value="{{$b3}}" id="option-6" onclick='atualizaS3(this.value)'>
          <label for="option-5" class="option option-5">
            <div class="dot"></div>
            <span>
                @if($a2 == 'bolivia')
                   Bolívia
               @elseif($a2 == 'colombia')
                   Colômbia
               @else
                   {{$a2}}
               @endif
           </span>
             </label>
          <label for="option-6" class="option option-6">
            <div class="dot"></div>
            <span>
                @if($b3 == 'bolivia')
                   Bolívia
               @elseif($b3 == 'colombia')
                   Colômbia
               @else
                   {{$b3}}
               @endif
           </span>
          </label>
    </div>

    <div class="wrapper">
        <input type="radio" name="semi4" value="{{$a1}}" id="option-7" onclick='atualizaS4(this.value)'>
        <input type="radio" name="semi4" value="{{$b4}}" id="option-8" onclick='atualizaS4(this.value)'>
          <label for="option-7" class="option option-7">
            <div class="dot"></div>
            <span>
                @if($a1 == 'bolivia')
                   Bolívia
               @elseif($a1 == 'colombia')
                   Colômbia
               @else
                   {{$a1}}
               @endif
           </span>
             </label>
          <label for="option-8" class="option option-8">
            <div class="dot"></div>
            <span>
                @if($b4 == 'bolivia')
                   Bolívia
               @elseif($b4 == 'colombia')
                   Colômbia
               @else
                   {{$b4}}
               @endif
           </span>
          </label>
    </div>

    <form action="../convidado/semi" method="POST">
        @csrf
        <input type='hidden' name='semi1' id='semi1'/>
        <input type='hidden' name='semi2' id='semi2'/>
        <input type='hidden' name='semi3' id='semi3'/>
        <input type='hidden' name='semi4' id='semi4'/>

        <input type='submit' class='botao' id='verifica' value='IR PARA A SEMIFINAL' onclick="execute()" disabled></input>
    </form>
    </center>

@endsection

@section('footer')
@endsection