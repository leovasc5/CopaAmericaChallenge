var f1;
var f2;
var t1;
var t2;

function atualizaF1(finalista, terceiro){
    f1 = finalista;
    t1 = terceiro;
    verifica();
}

function atualizaF2(finalista, terceiro){
    f2 = finalista;
    t2 = terceiro;
    verifica();
}

function verifica(){
    var semBug = 1;
    //O último elemento libera o botão mesmo se for nulo. Logo, preciso que o último elemento seja irrelevante pro andamento do jogo
    if(f1 && f2 && t1 && t2 && semBug != '' || null){
        document.getElementById('verifica').disabled = false;
    }
}

function execute(){
    document.getElementById('final1').value = f1;
    document.getElementById('final2').value = f2;
    document.getElementById('terceiro1').value = t1;
    document.getElementById('terceiro2').value = t2;
}