<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$nome_banco = "empressa";

//Conexão

$conexao = new mysqli($servidor, $usuario, $password, $nome_banco);
if ($conexao->connect_errno) {
    die("Conexão falhou" . $conexao->connect_errno);
} else {
    echo ("Conexão Funcionou");
}

/*
//criando tabela produtos

$criar_tabela = "CREATE TABLE produtos(
            id INT(6),
            titulo VARCHAR(30) NOT NULL,
            pagamento DATE NOT NULL,
            valor FLOAT
        )";

 if($conexao->query($criar_tabela)===TRUE){
    echo " Consulta bem Sucedida!!!!!";
}else{
    echo "Erro durante a consulta: ".$conexao->error;
}


//INSERINDO vALORES

$inseri_valor = "INSERT INTO produtos (id,titulo,pagamento,valor)
        VALUES(3,'macbook','2019-07-05',180),
        (4,'microfone','2019-07-01',1200)";



if($conexao->query($inseri_valor)===TRUE){
    echo " Consulta bem Sucedida!!!!!";
}else{
    echo "Erro durante a consulta: ".$conexao->error;
}

*/

//Exibindo os valores da tabela

$receber_valor = "SELECT * FROM produtos";

$resultado = $conexao->query($receber_valor);

if ($resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_assoc()) {
        echo "<br> id: " . $linha["id"] . "<br> Titulo: " . $linha["titulo"] . "<br> Pagamento: " . $linha["pagamento"] . "<br> Valor: " . $linha["valor"];
    }
} else {
    echo "Não Existe valores dentro da tabela";
}


?>
