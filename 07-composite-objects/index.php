<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Objetos Compostos em PHP</title>
    <style>
        body{
            font-family:sans-serif;
        }
        h1{
            color:red;
            text-shadow: 2px 2px 8px #FF7788;
        }
    </style>
</head>
<body>
    <h1>ULTRA EMOJI COMBAT</h1>
    <pre>
        <?php
            require_once 'Lutador.php';

            $l = array();

            $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
            $l[1] = new Lutador("PutScript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            $l[0]->apresentar();
            $l[2]->status();
            $l[2]->ganharLuta();
            $l[2]->empatarLuta();
            $l[2]->apresentar();

        ?>
    </pre>
</body>
</html>