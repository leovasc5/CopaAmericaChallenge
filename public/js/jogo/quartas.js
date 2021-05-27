var s1;
var s2;
var s3;
var s4;

function atualizaS1(pais){
    s1 = pais;
    verifica();
}

function atualizaS2(pais){
    s2 = pais;
    verifica();
}

function atualizaS3(pais){
    s3 = pais;
    verifica();
}

function atualizaS4(pais){
    s4 = pais;
    verifica();
}

function verifica(){
    var semBug = 1;
    //O último elemento libera o botão mesmo se for nulo. Logo, preciso que o último elemento seja irrelevante pro andamento do jogo
    if(s1 && s2 && s3 && s4 && semBug != '' || null){
        document.getElementById('verifica').disabled = false;
    }
}

function execute(){
    document.getElementById('semi1').value = s1;
    document.getElementById('semi2').value = s2;
    document.getElementById('semi3').value = s3;
    document.getElementById('semi4').value = s4;
}