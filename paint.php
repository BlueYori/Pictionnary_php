<?php session_start();

if (!isset($_SESSION['user']['prenom'])) {
    header("Location: main.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>Pictionnary</title>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="custom-icons/css/custom-icons.css">
    <link type="text/css" rel="stylesheet" href="neko-framework/external-plugins/external-plugins.min.css">
    <!--
    <link type="text/css" rel="stylesheet" href="neko-framework/css/layout/neko-framework-layout.css">
    -->
    <link type="text/css" rel="stylesheet" id="color" href="neko-framework/css/color/neko-framework-color.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script type="text/javascript">
        var sizes = [8, 20, 44, 90];
        var size, color;
        var drawingCommands = [];

        var setColor = function() {
            //color = document.getElementById('color').value;

            color = "#FF3030";
            console.log("color:" + color);
        };

        var setSize = function() {
            size = 8;
            console.log("size:" + size);
        };

        window.onload = function() {
            var canvas    = document.getElementById('myCanvas');
            canvas.width  = 400;
            canvas.height = 400;
            var context   = canvas.getContext('2d');

            setSize();
            setColor();

            //document.getElementById('size').onchange  = setSize;
            //document.getElementById('color').onchange = setColor;

            var isDrawing = false;

            var startDrawing = function(e) {

                var command = {};
                command.command="start";
                command.size=size;
                command.color=color;

                drawingCommands.push(command);

                isDrawing = true;
            };

            var stopDrawing = function(e) {
                isDrawing = false;
            };

            var draw = function(e) {
                if (isDrawing) {
                    var command = {};
                    command.command="draw";
                    command.size=size;
                    drawingCommands.push(command);

                    command.x= e.x;
                    command.y= e.y;

                    context.beginPath();
                    context.fillStyle = color;
                    context.arc(e.x, e.y, size / 2, 0, 2 * Math.PI);
                    context.fill();
                    context.closePath();
                }
            };

            canvas.onmousedown = startDrawing;
            canvas.onmouseout  = stopDrawing;
            canvas.onmouseup   = stopDrawing;
            canvas.onmousemove = draw;

            document.getElementById('restart').onclick = function() {
                drawingCommands.push({
                    command : "clear"
                });

                context.clearRect(0, 0, canvas.width, canvas.height);
            };

            document.getElementById('validate').onclick = function() {
                document.getElementById('drawingCommands').value = JSON.stringify(drawingCommands);
                document.getElementById('picture').value = canvas.toDataURL();
            };

        };
    </script>
</head>
<body>

<canvas id="myCanvas"></canvas>

<form name="tools" action="req_paint.php" method="post">
    <!-- ici, insérez un champs de type range avec id="size", pour choisir un entier entre 0 et 4) -->
    <div class="form-control">
        <label for="taille">Taille :</label>
        <input type="range"  name="taille" id="taille" min="0" max="3" step="1"/>
    </div>
    <!-- ici, insérez un champs de type color avec id="color", et comme valeur l'attribut  de session couleur (à l'aide d'une commande php echo).) -->
    <div class="form-control">
        <label for="couleur">Couleur :</label>
        <input type="color" name="color" id="color" value="#000000"/>
    </div>
    <input id="restart" type="button" value="Recommencer"/>
    <input type="hidden" id="drawingCommands" name="drawingCommands"/>
    <!-- Les champs suivants servent à envoyer des données qui ne sont pas contenus dans des input par defaut -->
    <input type="hidden" id="picture" name="picture"/>
    <input id="validate" type="submit" value="Valider"/>
</form>

</body>
</html>
