function showWinner(winner) {

    var div = '<div class="col-12"><div class="alert alert-success">';

    if(winner === 'Empate') {

        div += 'O jogo ficou empatado</div></div>';
    
    } else {

        div +=  'O vencedor foi o jogador: ' + winner +'</div></div>';
    }

    $(".winner").empty().show().append(div);

    setTimeout(function(){

        $(".winner").fadeOut();

    }, 5000);
}