<?php

$peso   = (float)$_POST['peso'];
$altura = (float)$_POST['altura'];

// IMC = Peso / (altura * altura);

$imc = $peso / ($altura * $altura);
$imc = (float) $imc;
$imc = round ($imc, 2);

if($peso <=0 || $altura <= o){
    $imc = 0;
    $resposta = 'valores informados inválidos';

}elseif($imc < 17){
    
    $resposta = 'Muito abaixo do peso';

}elseif($imc >= 17 && $imc <= 18.49){

    $resposta = 'Abaixo do peso';

}elseif($imc >= 18.5 && $imc <= 24.99){

    $resposta = 'Peso normal';

}elseif($imc >= 25 && $imc <= 29.99){

    $resposta = 'Acima do peso';

}elseif($imc >= 30 && $imc <= 34.99){

    $resposta = 'Obesidade I';

}elseif($imc >= 35 && $imc <= 39.99){

    $resposta = 'Obesidade II (severa)';

}else{

    $resposta = 'Obesidade III (mórbida)';

}

header ("Location: /resultado.php?imc={$imc}&resposta={$resposta}");
