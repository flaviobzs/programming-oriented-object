<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Herança - Parte 1</title>
    <style>
        body{
            font-family:sans-serif;
        }
        table{
            border-collapse: collapse;
        }
        table,th,td{
            border: 1px solid black;
        }
        th,td{
            text-align:center;
            padding:7px;
        }
        th{
            background-color:#aa3155;
        }
    </style>
</head>
<body>
    <h1>Herança - Parte 1</h1>
    <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $a[0] = new Aluno("João",11,"M","Informática");
            $a[0]->descAluno();
            $a[0]->fazerAniv();

            $p[0] = new Professor("Felipe",35,"M","Física",1500);
            $p[0]->receberAum(200);
            $p[0]->descProf();

            $f[0] = new Funcionario("Maria",28,"F","Contas");
            $f[0]->mudarTrabalho();
            $f[0]->descFunc();


        ?>
    </pre>
</body>
</html>