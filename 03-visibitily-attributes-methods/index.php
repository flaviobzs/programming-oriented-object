<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Configurando Visibilidade de Atributos e Métodos</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';

            $c1 = new Caneta;
            $c1->modelo = "BIC Cristal";
            $c1->cor = "Blue";
            //$c1->ponta = 0.5;
            //$c1->carga = 89;
            //$c1->tampada = true;
            //var_dump($c1);
            print_r($c1);
            $c1->rabiscar();
            $c1->tampar();
            $c1->rabiscar();
        ?>
    </pre>
</body>
</html>