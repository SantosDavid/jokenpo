var player1 = 0;

var player2 = 0;

function updateScoreboard(winner) {

    if (winner == 1) {

        $("#score-player1").empty().append(++player1);
    }

    else if (winner == 2) {

        $("#score-player2").empty().append(++player2); 
    }
}