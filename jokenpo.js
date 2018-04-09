function jokenpo() {

	console.log("Escolha sua jogada: \n1 - Papel\n2 - Pedra \n3 - Tesoura");
	var jogada;
	var jogadaComputador = Math.floor(Math.random() * 3)+1;

	jogada = parseInt(prompt());
	
	console.log("O computador jogou " + tipoJogada(jogadaComputador));
	if (jogada == jogadaComputador) {
		return 0;
	} 
	switch (jogada) {
		case 1: if (jogadaComputador == 2) {
				return 1;
			} else return -1;
			break;
		case 2: if (jogadaComputador == 1) {
				return -1;
			} else return 1;
			break;
		case 3: if (jogadaComputador == 2) {
				return -1;
			} else return 1;
			break;
		default : return -1;
	}	
	
}

function main() {
	var pontuacao = 0;
	
	do {
		result = jokenpo();
		switch(result) {
			case 0: console.log("Você empatou!");
				break;
			case 1: console.log("Você ganhou!");
				pontuacao++;
			case -1: console.log("Você perdeu!");
			default: break;	
		}

	} while (result != -1);

	console.log("A sua pontuação foi: " + pontuacao + " pontos");


}


function tipoJogada(jogada) {

	switch(jogada) {
		case 1: return "Papel";
			break;
		case 2: return "Pedra";
			break;
		case 3: return "Tesoura";
			break;
	}
}

main();
