<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            height: 150px
        }

        #result {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <h1>Player 1</h1>
        <img id="p1"/>

        <br><br><br>
        <button id="vs">VS</button>

        <h1>Player 2</h1>
        <img id="p2" src=""/>
    </div>
    <br>
    <div>
        WINNER: 
        <div id="result"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
<script>
    var game = ["rock", "paper", "scissors"];

    $("#vs").click(function() {
        var player1 = Math.floor(Math.random() * game.length);
        var player2 = Math.floor(Math.random() * game.length);

        $("#p1").html(game[player1]);
        $("#p2").html(game[player2]);

        switch(game[player2]){
            case "rock":
                $("#p2").attr("src", "./img/rock.png");
                break;
            case "scissors":
                $("#p2").attr("src", "./img/scissors.png");
                break;
            case "paper":
                $("#p2").attr("src", "./img/paper.png");
                break;
        }

        switch(game[player1]){
            case "rock":
                $("#p1").attr("src", "./img/rock.png");
                if(game[player2] == "scissors") {
                    return $("#result").html("rock")
                } else if (game[player1] != game[player2]) {
                    return $("#result").html(game[player2])
                }
                break;
            case "scissors":
                $("#p1").attr("src", "./img/scissors.png");
                if(game[player2] == "paper") {
                    return $("#result").html("scissors")
                } else if (game[player1] != game[player2]) {
                    return $("#result").html(game[player2])
                }
                break;
            case "paper":
                $("#p1").attr("src", "./img/paper.png");
                if(game[player2] == "rock") {
                    return $("#result").html("paper")
                } else if (game[player1] != game[player2]) {
                    return $("#result").html(game[player2])
                }
                break;
        }

        if(player1 === player2) {
            return $("#result").html("DRAW")
        }
    });
</script>
</html>