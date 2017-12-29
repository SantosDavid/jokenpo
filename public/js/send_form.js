$(function(){

    $(".btn").on("click", function () {

        sendForm();

    });

});

function sendForm() {

    var url = "index.php?";
    
    url += "player1=" +  $("#player1").val();

    url += "&player2=" + $("#player2").val();

    $.ajax({
        type: 'get',
        url : url,
        success: function (winner) {
        
            showWinner(winner);
            updateScoreboard(winner);
        },
    });

}