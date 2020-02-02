!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Herança - Parte 2</title>
    <style>
        body{
            font-family:sans-serif;
        }
    </style>
</head>
<body>
    <h1>Herança (Parte 2)</h1>   
    <pre>
        <?php
            
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            require_once 'Tecnico.php';
            require_once 'Professor.php';
            $p[0] = new Visitante ("Joaquim ",35,"M");
            print_r($p[0]);
            $p[0]->fazerAniv();
            $p[1] = new Aluno("Gabriela", 15, "F",1221,"Jogos");
            print_r($p[1]);
            $p[1]->pagarMensalidade();
            
            $p[2] = new Bolsista("Patricia", 13, "F",1202,"Desenho");
            print_r($p[2]);
            $p[2]->renovarBolsa();
            $p[2]->pagarMensalidade();
            $p[2]->fazerAniv();
            $p[3] = new Tecnico ("Samuel", 18, "M", 1111, "Design",false);
            print_r($p[3]);
            $p[3]->praticar();
            $p[4] = new Professor("Mônica", 40, "F", "Arte",980.30);
            print_r($p[4]);
            $p[4]->receberAumento(300.10);
          
        ?>
    </pre>
</body>
</html>