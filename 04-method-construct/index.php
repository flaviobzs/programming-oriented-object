<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Métodos Getter, Setter e Construtor</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';

            $c1 = new Caneta("BIC Cristal","Vermelha",0.8);
            $c2 = new Caneta("Faber-Castel","Preta",0.5);

            print_r($c1);
            print_r($c2);

        ?>
    </pre>
</body>
</html>