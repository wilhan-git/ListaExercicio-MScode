<?php 

$listanum = array (1,2,5,4,5,6,7,8,9,10);


$resultado = 0;

echo"A soma dos numeros impares é: ". numeroimpar($listanum);

function numeroimpar(array $lista){
    $resultado = 0;
    $tamanho_arr = count($lista);
    for($i = $tamanho_arr-1;$i>=0;$i--){
       if($lista[$i] % 2 == 1){
            $resultado += $lista[$i];
       }
    }
    return $resultado;
}







?>