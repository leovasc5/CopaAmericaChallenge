//Foram usados 'document.getElementById('exemplo') pois existe um problema no js que impossibilitava manipular os options por meio de variaveis'

var ga_primeiro;
var ga_segundo;
var ga_terceiro;
var ga_quarto;
var ga_quinto;

var gb_primeiro;
var gb_segundo;
var gb_terceiro;
var gb_quarto;
var gb_quinto;

//GRUPO A

var ar_selected = false;
var bo_selected = false;
var ch_selected = false;
var pa_selected = false;
var ur_selected = false;

function atualizaGA(excecao, posicao){
    if(excecao == 'argentina' && ar_selected == false){
        document.getElementById('slct_ar').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_bo').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ch').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pa').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ur').options[parseInt(posicao)].disabled = "disabled";
        posicao == 1 ? ga_primeiro = 'argentina' : null;
        posicao == 2 ? ga_segundo = 'argentina' : null;
        posicao == 3 ? ga_terceiro = 'argentina' : null;
        posicao == 4 ? ga_quarto = 'argentina' : null;
        posicao == 5 ? ga_quinto = 'argentina' : null;
        ar_selected = true;
        verifica();
    }else if(excecao == 'argentina' && ar_selected == true){
        swal('Limpe o Grupo A', 'Você deve limpar o Grupo A para poder trocar a posição da Argentina', 'error');
    }

    if(excecao == 'bolivia' && bo_selected == false){
        document.getElementById('slct_ar').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_bo').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_ch').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pa').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ur').options[parseInt(posicao)].disabled = "disabled";
        posicao == 1 ? ga_primeiro = 'bolivia' : null;
        posicao == 2 ? ga_segundo = 'bolivia' : null;
        posicao == 3 ? ga_terceiro = 'bolivia' : null;
        posicao == 4 ? ga_quarto = 'bolivia' : null;
        posicao == 5 ? ga_quinto = 'bolivia' : null;
        bo_selected = true;
        verifica();
    }else if(excecao == 'bolivia' && bo_selected == true){
        swal('Limpe o Grupo A', 'Você deve limpar o Grupo A para poder trocar a posição da Bolívia', 'error');
    }

    if(excecao == 'chile' && ch_selected == false){
        document.getElementById('slct_ar').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_bo').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ch').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_pa').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ur').options[parseInt(posicao)].disabled = "disabled";
        posicao == 1 ? ga_primeiro = 'chile' : null;
        posicao == 2 ? ga_segundo = 'chile' : null;
        posicao == 3 ? ga_terceiro = 'chile' : null;
        posicao == 4 ? ga_quarto = 'chile' : null;
        posicao == 5 ? ga_quinto = 'chile' : null;
        ch_selected = true;
        verifica();
    }else if(excecao == 'chile' && ch_selected == true){
        swal('Limpe o Grupo A', 'Você deve limpar o Grupo A para poder trocar a posição da Chile', 'error');
    }

    if(excecao == 'paraguai' && pa_selected == false){
        document.getElementById('slct_ar').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_bo').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ch').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pa').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_ur').options[parseInt(posicao)].disabled = "disabled";
        posicao == 1 ? ga_primeiro = 'paraguai' : null;
        posicao == 2 ? ga_segundo = 'paraguai' : null;
        posicao == 3 ? ga_terceiro = 'paraguai' : null;
        posicao == 4 ? ga_quarto = 'paraguai' : null;
        posicao == 5 ? ga_quinto = 'paraguai' : null;
        pa_selected = true;
        verifica();
    }else if(excecao == 'chile' && pa_selected == true){
        swal('Limpe o Grupo A', 'Você deve limpar o Grupo A para poder trocar a posição do Paraguai', 'error');
    }

    if(excecao == 'uruguai' && ur_selected == false){
        document.getElementById('slct_ar').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_bo').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ch').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pa').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ur').options[parseInt(posicao)].disabled = false;
        posicao == 1 ? ga_primeiro = 'uruguai' : null;
        posicao == 2 ? ga_segundo = 'uruguai' : null;
        posicao == 3 ? ga_terceiro = 'uruguai' : null;
        posicao == 4 ? ga_quarto = 'uruguai' : null;
        posicao == 5 ? ga_quinto = 'uruguai' : null;
        ur_selected = true;
        verifica();
    }else if(excecao == 'uruguai' && ur_selected == true){
        swal('Limpe o Grupo A', 'Você deve limpar o Grupo A para poder trocar a posição do Uruguai', 'error');
    }

}

function limparGA(){
    document.getElementById('slct_ar').value = "Posição";
    document.getElementById('slct_bo').value = "Posição";
    document.getElementById('slct_ch').value = "Posição";
    document.getElementById('slct_pa').value = "Posição";
    document.getElementById('slct_ur').value = "Posição";
    for(b = 1; b <=6; b++){
        document.getElementById('slct_ar').options[b].disabled = false;
        document.getElementById('slct_bo').options[b].disabled = false;
        document.getElementById('slct_ch').options[b].disabled = false;
        document.getElementById('slct_pa').options[b].disabled = false;
        document.getElementById('slct_ur').options[b].disabled = false;

        ar_selected = false;
        bo_selected = false;
        ch_selected = false;
        pa_selected = false;
        ur_selected = false;

        document.getElementById('verifica').disabled = "disabled";
    }
}

function limparGA(){
    document.getElementById('slct_ar').value = "Posição";
    document.getElementById('slct_bo').value = "Posição";
    document.getElementById('slct_ch').value = "Posição";
    document.getElementById('slct_pa').value = "Posição";
    document.getElementById('slct_ur').value = "Posição";
    for(b = 1; b <=6; b++){
        document.getElementById('slct_ar').options[b].disabled = false;
        document.getElementById('slct_bo').options[b].disabled = false;
        document.getElementById('slct_ch').options[b].disabled = false;
        document.getElementById('slct_pa').options[b].disabled = false;
        document.getElementById('slct_ur').options[b].disabled = false;

        ar_selected = false;
        bo_selected = false;
        ch_selected = false;
        pa_selected = false;
        ur_selected = false;
    
        ga_primeiro = null;
        ga_segundo = null;
        ga_terceiro = null;
        ga_quarto = null;
        ga_quinto = null;
    
        document.getElementById('1A').value = '';
        document.getElementById('2A').value = '';
        document.getElementById('3A').value = '';
        document.getElementById('4A').value = '';
        document.getElementById('5A').value = '';
    }
}

//GRUPO B
var br_selected = false;
var co_selected = false;
var eq_selected = false;
var pe_selected = false;
var ve_selected = false;

function atualizaGB(excecao, posicao){
    if(excecao == 'brasil' && br_selected == false){
        document.getElementById('slct_br').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_co').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_eq').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pe').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ve').options[parseInt(posicao)].disabled = "disabled";
        posicao == 1 ? gb_primeiro = 'brasil' : null;
        posicao == 2 ? gb_segundo = 'brasil' : null;
        posicao == 3 ? gb_terceiro = 'brasil' : null;
        posicao == 4 ? gb_quarto = 'brasil' : null;
        posicao == 5 ? gb_quinto = 'brasil' : null;
        br_selected = true;
        verifica();
    }else if(excecao == 'brasil' && br_selected == true){
        swal('Limpe o Grupo B', 'Você deve limpar o Grupo B para poder trocar a posição do Brasil', 'error');
    }

    if(excecao == 'colombia' && co_selected == false){
        document.getElementById('slct_br').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_co').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_eq').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pe').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ve').options[parseInt(posicao)].disabled = "disabled";
        posicao == 1 ? gb_primeiro = 'colombia' : null;
        posicao == 2 ? gb_segundo = 'colombia' : null;
        posicao == 3 ? gb_terceiro = 'colombia' : null;
        posicao == 4 ? gb_quarto = 'colombia' : null;
        posicao == 5 ? gb_quinto = 'colombia' : null;
        co_selected = true;
        verifica();
    }else if(excecao == 'colombia' && co_selected == true){
        swal('Limpe o Grupo B', 'Você deve limpar o Grupo B para poder trocar a posição da Colômbia', 'error');
    }

    if(excecao == 'equador' && eq_selected == false){
        document.getElementById('slct_br').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_co').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_eq').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_pe').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ve').options[parseInt(posicao)].disabled = "disabled";
        posicao == 1 ? gb_primeiro = 'equador' : null;
        posicao == 2 ? gb_segundo = 'equador' : null;
        posicao == 3 ? gb_terceiro = 'equador' : null;
        posicao == 4 ? gb_quarto = 'equador' : null;
        posicao == 5 ? gb_quinto = 'equador' : null;
        eq_selected = true;
        verifica();
    }else if(excecao == 'equador' && eq_selected == true){
        swal('Limpe o Grupo B', 'Você deve limpar o Grupo B para poder trocar a posição do Equador', 'error');
    }

    if(excecao == 'peru' && pe_selected == false){
        document.getElementById('slct_br').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_co').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_eq').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pe').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_ve').options[parseInt(posicao)].disabled = "disabled";
        posicao == 1 ? gb_primeiro = 'peru' : null;
        posicao == 2 ? gb_segundo = 'peru' : null;
        posicao == 3 ? gb_terceiro = 'peru' : null;
        posicao == 4 ? gb_quarto = 'peru' : null;
        posicao == 5 ? gb_quinto = 'peru' : null;
        pe_selected = true;
        verifica();
    }else if(excecao == 'peru' && pe_selected == true){
        swal('Limpe o Grupo B', 'Você deve limpar o Grupo B para poder trocar a posição do Peru', 'error');
    }

    if(excecao == 'venezuela' && ve_selected == false){
        document.getElementById('slct_br').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_co').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_eq').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pe').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ve').options[parseInt(posicao)].disabled = false;
        posicao == 1 ? gb_primeiro = 'venezuela' : null;
        posicao == 2 ? gb_segundo = 'venezuela' : null;
        posicao == 3 ? gb_terceiro = 'venezuela' : null;
        posicao == 4 ? gb_quarto = 'venezuela' : null;
        posicao == 5 ? gb_quinto = 'venezuela' : null;
        ve_selected = true;
        verifica();
    }else if(excecao == 'venezuela' && ve_selected == true){
        swal('Limpe o Grupo B', 'Você deve limpar o Grupo B para poder trocar a posição da Venezuela', 'error');
    }

}

function limparGB(){
    document.getElementById('slct_br').value = "Posição";
    document.getElementById('slct_co').value = "Posição";
    document.getElementById('slct_eq').value = "Posição";
    document.getElementById('slct_pe').value = "Posição";
    document.getElementById('slct_ve').value = "Posição";
    for(b = 1; b <=6; b++){
        document.getElementById('slct_br').options[b].disabled = false;
        document.getElementById('slct_co').options[b].disabled = false;
        document.getElementById('slct_eq').options[b].disabled = false;
        document.getElementById('slct_pe').options[b].disabled = false;
        document.getElementById('slct_ve').options[b].disabled = false;

        br_selected = false;
        co_selected = false;
        eq_selected = false;
        pe_selected = false;
        ve_selected = false;

        gb_primeiro = null;
        gb_segundo = null;
        gb_terceiro = null;
        gb_quarto = null;
        gb_quinto = null;

        document.getElementById('1B').value = '';
        document.getElementById('2B').value = '';
        document.getElementById('3B').value = '';
        document.getElementById('4B').value = '';
        document.getElementById('5B').value = '';
        document.getElementById('verifica').disabled = "disabled";
    }
        
    
}

function verifica(){
    var semBug = 1;
    //O último elemento libera o botão mesmo se for nulo. Logo, preciso que o último elemento seja irrelevante pro andamento do jogo
    if(ga_primeiro && ga_segundo && ga_terceiro && ga_quarto && ga_quinto
    && gb_primeiro && gb_segundo && gb_terceiro && gb_quarto && gb_quinto && semBug != '' || null){
        document.getElementById('verifica').disabled = false;
    }
}

function execute(){
    document.getElementById('1A').value = ga_primeiro;
    document.getElementById('2A').value = ga_segundo;
    document.getElementById('3A').value = ga_terceiro;
    document.getElementById('4A').value = ga_quarto;
    document.getElementById('5A').value = ga_quinto;

    document.getElementById('1B').value = gb_primeiro;
    document.getElementById('2B').value = gb_segundo;
    document.getElementById('3B').value = gb_terceiro;
    document.getElementById('4B').value = gb_quarto;
    document.getElementById('5B').value = gb_quinto;
}