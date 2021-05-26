@extends('layout.main')
@section('title', 'CAC - Home')

@section('topBar')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/jogo/format.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/jogo/select.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/scrollBar.css')?>" type="text/css">
<script src="../js/jogo/grupos.js"></script>
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
                <td id='first'>
                    <img src='../img/times/argentina.jpg' style='max-width:64px;'/>
                    <br>
                    <label for='Argentina'>Argentina</label>
                    <div class='select'>
                        <select id='slct_ar' name="Argentina" onchange="atualizaGA('argentina', value)">
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option value='1'>1º Lugar (classificado)</option>
                            <option value='2'>2º Lugar (classificado)</option>
                            <option value='3'>3º Lugar (classificado)</option>
                            <option value='4'>4º Lugar (classificado)</option>
                            <option value='5'>5º Lugar (eliminado)</option>
                        </select>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td>
                    <img src='../img/times/bolivia.png' style='width:64px;'/>
                    <br>
                    <label for='Bolívia'>Bolívia</label>
                    <div class='select'>
                        <select id='slct_bo' name="Bolivia" onchange='atualizaGA()'>
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option>1º Lugar (classificado)</option>
                            <option>2º Lugar (classificado)</option>
                            <option>3º Lugar (classificado)</option>
                            <option>4º Lugar (classificado)</option>
                            <option>5º Lugar (eliminado)</option>
                        </select>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td>
                    <img src='../img/times/chile.jpg' style='width:64px;'/>
                    <br>
                    <label for='Chile'>Chile</label>
                    <div class='select'>
                        <select id='slct_ch' name="Chile" onchange='atualizaGA()'>
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option>1º Lugar (classificado)</option>
                            <option>2º Lugar (classificado)</option>
                            <option>3º Lugar (classificado)</option>
                            <option>4º Lugar (classificado)</option>
                            <option>5º Lugar (eliminado)</option>
                        </select>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <img src='../img/times/paraguai.jpg' style='width:64px;'/>
                    <br>
                    <label for='Paraguai'>Paraguai</label>
                    <div class='select'>
                        <select id='slct_pa' name="Paraguai" onchange='atualizaGA()'>
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option>1º Lugar (classificado)</option>
                            <option>2º Lugar (classificado)</option>
                            <option>3º Lugar (classificado)</option>
                            <option>4º Lugar (classificado)</option>
                            <option>5º Lugar (eliminado)</option>
                        </select>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <img src='../img/times/uruguai.jpg' style='width:64px;'/>
                    <br>
                    <label for='Uruguai'>Uruguai</label>
                    <div class='select'>
                        <select id='slct_pa' name="Uruguai" onchange="atualizaGA('uruguai')">
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option>1º Lugar (classificado)</option>
                            <option>2º Lugar (classificado)</option>
                            <option>3º Lugar (classificado)</option>
                            <option>4º Lugar (classificado)</option>
                            <option>5º Lugar (eliminado)</option>
                        </select>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class='container'>
    <div class='sub2'>
        GRUPO B
    </div>
        
    <div class='times'>
        <table>
            <tr>
                <td id='first'>
                    <img src='../img/times/brasil.jpg' style='max-width:64px;'/>
                    <br>
                    <label for='Brasil'>Brasil</label>
                    <div class='select'>
                        <select id='slct_br'>
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option>1º Lugar (classificado)</option>
                            <option>2º Lugar (classificado)</option>
                            <option>3º Lugar (classificado)</option>
                            <option>4º Lugar (classificado)</option>
                            <option>5º Lugar (eliminado)</option>
                        </select>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td>
                    <img src='../img/times/colombia.jpg' style='width:64px;'/>
                    <br>
                    <label for='Colômbia'>Colômbia</label>
                    <div class='select'>
                        <select id='slct_co'>
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option>1º Lugar (classificado)</option>
                            <option>2º Lugar (classificado)</option>
                            <option>3º Lugar (classificado)</option>
                            <option>4º Lugar (classificado)</option>
                            <option>5º Lugar (eliminado)</option>
                        </select>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td>
                    <img src='../img/times/equador.jpg' style='width:64px;'/>
                    <br>
                    <label for='Equador'>Equador</label>
                    <div class='select'>
                        <select id='slct_eq'>
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option>1º Lugar (classificado)</option>
                            <option>2º Lugar (classificado)</option>
                            <option>3º Lugar (classificado)</option>
                            <option>4º Lugar (classificado)</option>
                            <option>5º Lugar (eliminado)</option>
                        </select>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <img src='../img/times/peru.jpg' style='width:64px;'/>
                    <br>
                    <label for='Peru'>Peru</label>
                    <div class='select'>
                        <select id='slct_pe'>
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option>1º Lugar (classificado)</option>
                            <option>2º Lugar (classificado)</option>
                            <option>3º Lugar (classificado)</option>
                            <option>4º Lugar (classificado)</option>
                            <option>5º Lugar (eliminado)</option>
                        </select>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <img src='../img/times/Venezuela.png' style='width:64px;'/>
                    <br>
                    <label for='Venezuela'>Venezuela</label>
                    <div class='select'>
                        <select id='slct_ve'>
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option>1º Lugar (classificado)</option>
                            <option>2º Lugar (classificado)</option>
                            <option>3º Lugar (classificado)</option>
                            <option>4º Lugar (classificado)</option>
                            <option>5º Lugar (eliminado)</option>
                        </select>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
</form>
</center>
<br><br>

@endsection

@section('footer')
@endsection