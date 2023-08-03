<?php 

    $lista_num = array(1,2,2,4,5,6,7,8,9,10);
    
    
    function encontradiferenca(array $lista){
        $lista_compara = array(1,2,3,4,5,6,7,8,9,10);

        $resultado = array_diff_assoc($lista_compara,$lista);

        return print_r($resultado);
    }

    encontradiferenca($lista_num);

   

   
           

       
      

?>