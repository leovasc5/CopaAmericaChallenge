@extends('layout.main')
@section('title', 'CAC - Convidado')

@section('topBar')

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/jogo/format.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/jogo/select.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/scrollBar.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/jogo/alert.css')?>" type="text/css">
<script src="../js/jogo/alert.js"></script>
<script src="../js/jogo/grupos.js"></script>

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
                        <select id='slct_ar' name="Argentina" onchange="atualizaGA('argentina', this.value)">
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
                        <select id='slct_bo' name="Bolivia" onchange="atualizaGA('bolivia', this.value)">
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option value="1">1º Lugar (classificado)</option>
                            <option value="2">2º Lugar (classificado)</option>
                            <option value="3">3º Lugar (classificado)</option>
                            <option value="4">4º Lugar (classificado)</option>
                            <option value="5">5º Lugar (eliminado)</option>
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
                        <select id='slct_ch' name="Chile" onchange="atualizaGA('chile', this.value)">
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option value="1">1º Lugar (classificado)</option>
                            <option value="2">2º Lugar (classificado)</option>
                            <option value="3">3º Lugar (classificado)</option>
                            <option value="4">4º Lugar (classificado)</option>
                            <option value="5">5º Lugar (eliminado)</option>
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
                        <select id='slct_pa' name="Paraguai" onchange="atualizaGA('paraguai', this.value)">
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option value="1">1º Lugar (classificado)</option>
                            <option value="2">2º Lugar (classificado)</option>
                            <option value="3">3º Lugar (classificado)</option>
                            <option value="4">4º Lugar (classificado)</option>
                            <option value="5">5º Lugar (eliminado)</option>
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
                        <select id='slct_ur' name="Uruguai" onchange="atualizaGA('uruguai', this.value)">
                            <option disabled selected style="color:#0066cc">Posição</option>
                            <option value="1">1º Lugar (classificado)</option>
                            <option value="2">2º Lugar (classificado)</option>
                            <option value="3">3º Lugar (classificado)</option>
                            <option value="4">4º Lugar (classificado)</option>
                            <option value="5">5º Lugar (eliminado)</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td id='last'>
                    <input type='button' class='botao' id='limparA' onclick='limparGA()'value='Limpar Grupo A'></input>
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
                        <select id='slct_br' name="Brasil" onchange="atualizaGB('brasil', this.value)">
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
                    <img src='../img/times/colombia.jpg' style='width:64px;'/>
                    <br>
                    <label for='Colômbia'>Colômbia</label>
                    <div class='select'>
                        <select id='slct_co' name="Colombia" onchange="atualizaGB('colombia', this.value)">
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
                    <img src='../img/times/equador.jpg' style='width:64px;'/>
                    <br>
                    <label for='Equador'>Equador</label>
                    <div class='select'>
                        <select id='slct_eq' name="Equador" onchange="atualizaGB('equador', this.value)">
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
                    <img src='../img/times/peru.jpg' style='width:64px;'/>
                    <br>
                    <label for='Peru'>Peru</label>
                    <div class='select'>
                        <select id='slct_pe' name="Peru" onchange="atualizaGB('peru', this.value)">
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
                    <img src='../img/times/Venezuela.png' style='width:64px;'/>
                    <br>
                    <label for='Venezuela'>Venezuela</label>
                    <div class='select'>
                        <select id='slct_ve' name="Venezuela" onchange="atualizaGB('venezuela', this.value)">
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
                <td id='last'>
                    <input type='button' class='botao' id='limparB'  onclick='limparGB()' value='Limpar Grupo B'></input>
                </td>
            </tr>
        </table>
    </div>
</div>

</center>
<form action = "/valida_grupos" method="POST">
    @csrf
    <input type='hidden' name='1A' id='1A'/>
    <input type='hidden' name='2A' id='2A'/>
    <input type='hidden' name='3A' id='3A'/>
    <input type='hidden' name='4A' id='4A'/>
    <input type='hidden' name='5A' id='5A'/>

    <input type='hidden' name='1B' id='1B'/>
    <input type='hidden' name='2B' id='2B'/>
    <input type='hidden' name='3B' id='3B'/>
    <input type='hidden' name='4B' id='4B'/>
    <input type='hidden' name='5B' id='5B'/>
    <center>
        <input type='submit' class='botao' id='verifica' value='IR PARA O MATA-MATA' onclick="execute()" disabled></input>
    </center>
</form>
<br><br>

@endsection

@section('footer')
@endsection