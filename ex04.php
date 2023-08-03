<?php 

    $lista_num = array(120000,2,2,3080,4,5,4400,7,48,20050);

    function segundomaiornumero(array $lista){
        $maiornumero = 0;
        $segundo = 0;

        for($i = count($lista)-1; $i>=0;$i--){

            if($maiornumero < $lista[$i]){
                $segundo = $maiornumero;
                $maiornumero = $lista[$i];
            }else if($segundo <$lista[$i]){
                $segundo = $lista[$i];
            }

            

        }

        return $segundo;

    }

    echo "O segundo Maior numero é: ".segundomaiornumero($lista_num);

?>