<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polimorfismo (Parte 1)</title>
    <style>
    body{
        font-family:sans-serif;
    }
    </style>
</head>
<body>
    <h1>Polimorfismo (Parte 1)</h1>
    <pre>
        <?php
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';
        
            $cang[0] = new Canguru(40, 5, 4,"Caramelo");
            print_r($cang[0]);
            $cang[0]->locomover();
            $cang[0]->usarBolsa();

            $cao[1] = new Cachorro(8, 1, 4, "Branco");
            print_r($cao[1]);
            $cao[1]->abanaRabo();
            $cao[1]->enterraOsso();
            $cao[1]->emitirSom();

            $cob[2] = new Cobra(3, 4, 0, "Verde");
            print_r($cob[2]);
            $cob[2]->locomover();

            $tart[0] = new Tartaruga(6, 3, 4, "Verde");
            print_r($tart[0]);
            $tart[0]->locomover();

            $gold[0] = new Goldfish(1, 3, 3, "Dourado");
            print_r($gold[0]);
            $gold[0]->locomover();

            $arara[0] = new Arara(3, 2, 4, "Amarela");
            print_r($arara[0]);
            $arara[0]->locomover();
        ?>
    </pre>
    
</body>
</html>