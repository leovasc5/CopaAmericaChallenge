@extends('layout.main')
@section('title', 'CAC - Home')

@section('topBar')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/jogo/format.css')?>" type="text/css">
<form action="" method="POST">
    @csrf
<center>
<div class='container'>
    <div class='sub1'>
        GRUPO A
    </div>

    <div class='times'>
        <table>
            <tr>
                <td>
                    {{-- <input type='number' name='argentina'/>º --}}
                    <img src='../img/times/argentina.jpg' style='max-width:48px;'/>
                    <label for='Argentina'>Argentina</label>
                </td>
            </tr>
            
            <tr>
                <td>
                    <img src='../img/times/bolivia.png' style='width:48px; margin-left:-20px;'/>
                    <label for='Bolívia'>Bolívia</label>
                </td>
            </tr>
            
            <tr>
                <td>
                    <img src='../img/times/chile.jpg' style='width:48px; margin-left:-24px;'/>
                    <label for='Chile'>Chile</label>
                </td>
            </tr>

            <tr>
                <td>
                    <img src='../img/times/paraguai.jpg' style='width:48px;'/>
                    <label for='Paraguai'>Paraguai</label>
                </td>
            </tr>

            <tr>
                <td>
                    <img src='../img/times/uruguai.jpg' style='width:48px;'/>
                    <label for='Uruguai'>Uruguai</label>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class='container'>

</div>

<div class='container'>
    <div class='sub2'>
        GRUPO B
    </div>
        
    <div class='times'>
        <table>
            <tr>
                <td>
                    <img src='../img/times/brasil.jpg' style='max-width:48px;margin-left:-20px;'/>
                    <label for='Brasil'>Brasil</label>
                </td>
            </tr>
            
            <tr>
                <td>
                    <img src='../img/times/colombia.jpg' style='width:48px; margin-left:5px;'/>
                    <label for='Colômbia'>Colômbia</label>
                </td>
            </tr>
            
            <tr>
                <td>
                    <img src='../img/times/equador.jpg' style='width:48px; margin-left:0px;'/>
                    <label for='Equador'>Equador</label>
                </td>
            </tr>

            <tr>
                <td>
                    <img src='../img/times/peru.jpg' style='width:48px;margin-left:-28px;'/>
                    <label for='Peru'>Peru</label>
                </td>
            </tr>

            <tr>
                <td>
                    <img src='../img/times/Venezuela.png' style='width:48px;'/>
                    <label for='Venezuela'>Venezuela</label>
                </td>
            </tr>
        </table>
    </div>
</div>
</form>
</center>
<br><br><br><br><br><br>

@endsection

@section('footer')
@endsection