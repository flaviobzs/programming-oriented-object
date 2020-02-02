<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercício prático POO em PHP</title>
    <style>
        body{
            font-family:sans-serif;
        }
        table{
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th{
            background-color: #00ff99;
        }
        th,td{
            text-align:center;
            padding:7px;
        }
    </style>
</head>
<body>
    <h1>Exercício prático POO em PHP</h1>
    <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $p = array();
            $p[0] = new Pessoa("Maria",20,"F");
            $p[1] = new Pessoa("João",26,"M");
            $p[2] = new Pessoa("Caetano",34,"M");
            print_r($p[0]);
            $p[0]->fazerAniver();

            $l = array();
            $l[0] = new Livro("A Guerra dos Tronos - Livro 1","George R. R. Martin",592,$p[1]);
            $l[1] = new Livro("O conto da Aia","Margaret Atwood",368,$p[0]);
            $l[2] = new Livro("PHP Básico","Paulo Arruda",230,$p[2]);

    
            $l[0]->detalhes();

            $l[1]->abrir();
            $l[1]->folhear(350);
            $l[1]->avancarPag();
            $l[1]->detalhes();

            $l[2]->abrir();
            $l[2]->folhear(1);
            $l[2]->voltarPag();
            $l[2]->detalhes();
        ?>
    </pre>
</body>
</html>