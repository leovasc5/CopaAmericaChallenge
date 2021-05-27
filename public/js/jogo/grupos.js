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
        ar_selected = true;
    }else if(excecao == 'argentina' && ar_selected == true){
        swal('Limpe o Grupo A', 'Você deve limpar o Grupo A para poder trocar a posição da Argentina', 'error');
    }

    if(excecao == 'bolivia' && bo_selected == false){
        document.getElementById('slct_ar').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_bo').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_ch').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pa').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ur').options[parseInt(posicao)].disabled = "disabled";
        bo_selected = true;
    }else if(excecao == 'bolivia' && bo_selected == true){
        swal('Limpe o Grupo A', 'Você deve limpar o Grupo A para poder trocar a posição da Bolívia', 'error');
    }

    if(excecao == 'chile' && ch_selected == false){
        document.getElementById('slct_ar').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_bo').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ch').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_pa').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ur').options[parseInt(posicao)].disabled = "disabled";
        ch_selected = true;
    }else if(excecao == 'chile' && ch_selected == true){
        swal('Limpe o Grupo A', 'Você deve limpar o Grupo A para poder trocar a posição da Chile', 'error');
    }

    if(excecao == 'paraguai' && pa_selected == false){
        document.getElementById('slct_ar').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_bo').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ch').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pa').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_ur').options[parseInt(posicao)].disabled = "disabled";
        pa_selected = true;
    }else if(excecao == 'chile' && pa_selected == true){
        swal('Limpe o Grupo A', 'Você deve limpar o Grupo A para poder trocar a posição do Paraguai', 'error');
    }

    if(excecao == 'uruguai' && ur_selected == false){
        document.getElementById('slct_ar').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_bo').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ch').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pa').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ur').options[parseInt(posicao)].disabled = false;
        ur_selected = true;
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
        br_selected = true;
    }else if(excecao == 'brasil' && br_selected == true){
        swal('Limpe o Grupo B', 'Você deve limpar o Grupo B para poder trocar a posição do Brasil', 'error');
    }

    if(excecao == 'colombia' && co_selected == false){
        document.getElementById('slct_br').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_co').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_eq').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pe').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ve').options[parseInt(posicao)].disabled = "disabled";
        co_selected = true;
    }else if(excecao == 'colombia' && co_selected == true){
        swal('Limpe o Grupo B', 'Você deve limpar o Grupo B para poder trocar a posição da Colômbia', 'error');
    }

    if(excecao == 'equador' && eq_selected == false){
        document.getElementById('slct_br').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_co').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_eq').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_pe').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ve').options[parseInt(posicao)].disabled = "disabled";
        eq_selected = true;
    }else if(excecao == 'equador' && eq_selected == true){
        swal('Limpe o Grupo B', 'Você deve limpar o Grupo B para poder trocar a posição do Equador', 'error');
    }

    if(excecao == 'peru' && pe_selected == false){
        document.getElementById('slct_br').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_co').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_eq').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pe').options[parseInt(posicao)].disabled = false;
        document.getElementById('slct_ve').options[parseInt(posicao)].disabled = "disabled";
        pe_selected = true;
    }else if(excecao == 'peru' && pe_selected == true){
        swal('Limpe o Grupo B', 'Você deve limpar o Grupo B para poder trocar a posição do Peru', 'error');
    }

    if(excecao == 'venezuela' && ve_selected == false){
        document.getElementById('slct_br').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_co').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_eq').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_pe').options[parseInt(posicao)].disabled = "disabled";
        document.getElementById('slct_ve').options[parseInt(posicao)].disabled = false;
        ve_selected = true;
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
    }
}