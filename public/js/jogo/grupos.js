//Foram usados 'document.getElementById('exemplo') pois existe um problema no js que impossibilitava manipular os options por meio de variaveis'

var ga_primeiro;
var ga_segundo;
var ga_terceiro;
var ga_quarto;
var ga_quinto;

var ar_selected = false;
var bo_selected = false;
var ch_selected = false;
var pa_selected = false;
var ur_selected = false;

function atualizaGA(excecao, posicao){
    posicao == '1' ? controllerPosition1GA(excecao): null;
    posicao == '2' ? controllerPosition2GA(excecao): null;
    posicao == '3' ? controllerPosition3GA(excecao): null;
    posicao == '4' ? controllerPosition4GA(excecao): null;
    posicao == '5' ? controllerPosition5GA(excecao): null;
}

function controllerPosition1GA(excecao){
    document.getElementById('slct_ar').options[1].disabled = "disabled";
    document.getElementById('slct_bo').options[1].disabled = "disabled";
    document.getElementById('slct_ch').options[1].disabled = "disabled";
    document.getElementById('slct_pa').options[1].disabled = "disabled";
    document.getElementById('slct_ur').options[1].disabled = "disabled";

    excecao == 'argentina' ? document.getElementById('slct_ar').options[1].disabled = false: null;
    excecao == 'bolivia' ? document.getElementById('slct_bo').options[1].disabled = false: null;
    excecao == 'chile' ? document.getElementById('slct_ch').options[1].disabled = false: null;
    excecao == 'paraguai' ? document.getElementById('slct_pa').options[1].disabled = false: null;
    excecao == 'uruguai' ? document.getElementById('slct_ur').options[1].disabled = false: null;
}

function controllerPosition2GA(excecao){
    document.getElementById('slct_ar').options[2].disabled = "disabled";
    document.getElementById('slct_bo').options[2].disabled = "disabled";
    document.getElementById('slct_ch').options[2].disabled = "disabled";
    document.getElementById('slct_pa').options[2].disabled = "disabled";
    document.getElementById('slct_ur').options[2].disabled = "disabled";

    excecao == 'argentina' ? document.getElementById('slct_ar').options[2].disabled = false: null;
    excecao == 'bolivia' ? document.getElementById('slct_bo').options[2].disabled = false: null;
    excecao == 'chile' ? document.getElementById('slct_ch').options[2].disabled = false: null;
    excecao == 'paraguai' ? document.getElementById('slct_pa').options[2].disabled = false: null;
    excecao == 'uruguai' ? document.getElementById('slct_ur').options[2].disabled = false: null;
}

function controllerPosition3GA(excecao){
    document.getElementById('slct_ar').options[3].disabled = "disabled";
    document.getElementById('slct_bo').options[3].disabled = "disabled";
    document.getElementById('slct_ch').options[3].disabled = "disabled";
    document.getElementById('slct_pa').options[3].disabled = "disabled";
    document.getElementById('slct_ur').options[3].disabled = "disabled";

    excecao == 'argentina' ? document.getElementById('slct_ar').options[3].disabled = false: null;
    excecao == 'bolivia' ? document.getElementById('slct_bo').options[3].disabled = false: null;
    excecao == 'chile' ? document.getElementById('slct_ch').options[3].disabled = false: null;
    excecao == 'paraguai' ? document.getElementById('slct_pa').options[3].disabled = false: null;
    excecao == 'uruguai' ? document.getElementById('slct_ur').options[3].disabled = false: null;
}

function controllerPosition4GA(excecao){
    document.getElementById('slct_ar').options[4].disabled = "disabled";
    document.getElementById('slct_bo').options[4].disabled = "disabled";
    document.getElementById('slct_ch').options[4].disabled = "disabled";
    document.getElementById('slct_pa').options[4].disabled = "disabled";
    document.getElementById('slct_ur').options[4].disabled = "disabled";

    excecao == 'argentina' ? document.getElementById('slct_ar').options[4].disabled = false: null;
    excecao == 'bolivia' ? document.getElementById('slct_bo').options[4].disabled = false: null;
    excecao == 'chile' ? document.getElementById('slct_ch').options[4].disabled = false: null;
    excecao == 'paraguai' ? document.getElementById('slct_pa').options[4].disabled = false: null;
    excecao == 'uruguai' ? document.getElementById('slct_ur').options[4].disabled = false: null;
}
    
function controllerPosition5GA(excecao){
    document.getElementById('slct_ar').options[5].disabled = "disabled";
    document.getElementById('slct_bo').options[5].disabled = "disabled";
    document.getElementById('slct_ch').options[5].disabled = "disabled";
    document.getElementById('slct_pa').options[5].disabled = "disabled";
    document.getElementById('slct_ur').options[5].disabled = "disabled";

    excecao == 'argentina' ? document.getElementById('slct_ar').options[5].disabled = false: null;
    excecao == 'bolivia' ? document.getElementById('slct_bo').options[5].disabled = false: null;
    excecao == 'chile' ? document.getElementById('slct_ch').options[5].disabled = false: null;
    excecao == 'paraguai' ? document.getElementById('slct_pa').options[5].disabled = false: null;
    excecao == 'uruguai' ? document.getElementById('slct_ur').options[5].disabled = false: null;
}    

function limparGA(){
    document.getElementById('slct_ar').value = "Posição";
    document.getElementById('slct_bo').value = "Posição";
    document.getElementById('slct_ch').value = "Posição";
    document.getElementById('slct_pa').value = "Posição";
    document.getElementById('slct_ur').value = "Posição";
    for(a = 1; a <=6; a++){
        document.getElementById('slct_ar').options[a].disabled = false;
        document.getElementById('slct_bo').options[a].disabled = false;
        document.getElementById('slct_ch').options[a].disabled = false;
        document.getElementById('slct_pa').options[a].disabled = false;
        document.getElementById('slct_ur').options[a].disabled = false;
    }
}

function limparGB(){

}