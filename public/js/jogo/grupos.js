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

var btn_ar = document.getElementById('slct_ar');
var btn_bo = document.getElementById('slct_bo');
var btn_ch = document.getElementById('slct_ch');
var btn_pa = document.getElementById('slct_pa');
var btn_ur = document.getElementById('slct_ur');


function atualizaGA(value, posicao){
    value = 'argentina' ? selectArgentina(posicao): null;
    value = 'bolivia' ? selectBolivia(posicao): null;
    value = 'chile' ? selectChile(posicao): null;
    value = 'paraguai' ? selectParaguai(posicao): null;
    value = 'uruguai' ? selectUruguai(posicao): null;
}

function selectArgentina(posicao){
    if(posicao == '1'){
        ga_primeiro = 'Argentina';
        
    }
}