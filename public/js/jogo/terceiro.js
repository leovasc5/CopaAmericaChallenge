var t;

function atualizaT(terceiro){
    t = terceiro;
    verifica();
}

function verifica(){
    var semBug = 1;
    //O último elemento libera o botão mesmo se for nulo. Logo, preciso que o último elemento seja irrelevante pro andamento do jogo
    if(t && semBug != '' || null){
        document.getElementById('verifica').disabled = false;
    }
}

function execute(){
    document.getElementById('terceiro').value = t;
}