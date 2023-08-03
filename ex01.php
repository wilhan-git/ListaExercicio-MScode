<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <form method="POST">

        <label for="palavra">Digite qualquer palavra: </label>
        <input type="text" name="palavra" id="iPalavra">

        <input type="submit" value="Enviar">
    </form>


    <?php 

    $receber = $_POST["palavra"];
    function retorna_espaco(){

   
        if(isset($_POST)){
            $palavra = $_POST["palavra"];

            for($i = strlen($palavra)-1;$i>=0;$i--){
                if($palavra[$i]==" "){
                    return true;
                }
            }
        }

    }

    function complemento(){
        if(retorna_espaco()==True){
            return "Contem";
        }else{
            return "Não contem";
        }
    
    }
   
    
        echo "O texto " .$receber . " digitado(a) ". complemento()." espaços.";
    
    
    
    ?>
</body>
</html>