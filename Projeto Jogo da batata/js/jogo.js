//encontrando dimensões do navegador para palco do jogo

var altura = 0;
var largura = 0;
var vidas = 1;
var tempo = 5;

var tempoBatata = 1500

var nivel = window.location.search
nivel  = nivel.replace('?','')

if(nivel === 'normal'){
    var tempoBatata = 1500
}else if (nivel === 'dificil'){
    var tempoBatata = 1000
}else if(nivel === 'batata_louca'){
    var tempoBatata = 750
}

function ajustarPalco(){
    altura = window.innerHeight
    largura = window.innerWidth

    console.log(largura,altura)

}
 

ajustarPalco()

//Cronometro

var cronometro = setInterval(function(){
    tempo -= 1
    if(tempo < 0){
        clearInterval(cronometro)
        clearInterval(criaBatata)
        window.location.href = 'vitoria.html'
    }else{
        document.getElementById('cronometro').innerHTML = tempo
    }
},1000)

//Criando posições random
function posicaoRandom(){

    //removendo batata existente
    if(document.getElementById('batata')){
        document.getElementById('batata').remove()

        if(vidas > 3){
            window.location.href = 'game_over.html'
        }else{
            document.getElementById('v' + vidas).src="img/coracao_vazio.png"
            
            vidas++
        }

    }
    

    var posicaoX = Math.floor(Math.random()* largura) - 90
    var posicaoY = Math.floor(Math.random()* altura) - 90

    posicaoX = posicaoX < 0 ? 0 : posicaoX
    posicaoY = posicaoY < 0 ? 0 : posicaoY

    console.log(posicaoX,posicaoY)

    //Criando elementos HTML

    var batata = document.createElement('img')
    batata.src = 'img/potato.png'
    batata.className = tamanhoRandom()
    batata.style.left = posicaoX + 'px'
    batata.style.top = posicaoY + 'px'
    batata.style.position = 'absolute'
    batata.id = 'batata'
    batata.onclick = function(){
        this.remove() 
    }

    document.body.appendChild(batata)
}

//Tamanhos aleatórios

function tamanhoRandom(){
    var classe = Math.floor(Math.random()*3)

    switch(classe){
        case 0:
            return 'batata1';

        case 1:
            return 'batata2';

        case 2:
            return 'batata3';
    }
}
