<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exemplo prático com Objeto</title>
</head>
<body>
   <pre>
        <?php
            require_once 'ContaBanco.php';

            $p1 = new ContaBanco(); //Jubileu
            $p2 = new ContaBanco(); //Creuza

            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p1->setNumConta(111);
            
            $p2->abrirConta("CP");
            $p2->setDono("Creuza");
            $p2->setNumConta(222);

            $p1->depositar(300);
            $p2->depositar(500);
            
            $p2->sacar(100);

            $p1->pagarMensal();

            $p2->fecharConta();

            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>