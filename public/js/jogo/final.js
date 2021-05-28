var campeao;
var vice;

function atualizaF(c, v){
    campeao = c;
    vice = v;
    verifica();
}

function verifica(){
    var semBug = 1;
    //O último elemento libera o botão mesmo se for nulo. Logo, preciso que o último elemento seja irrelevante pro andamento do jogo
    if(campeao && semBug != '' || null){
        document.getElementById('verifica').disabled = false;
        console.log(campeao)
        console.log(vice)
    }
}

function execute(){
    document.getElementById('campeao').value = campeao;
    document.getElementById('vice').value = vice;
}