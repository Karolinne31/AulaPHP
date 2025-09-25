<?php 
if(isset($_REQUEST["Enviar"])){
$cliente = $_REQUEST["cliente"];
$sexo = $_REQUEST["sexo"];
$valorcompra = $_REQUEST["valorcompra"];

if($sexo == "Feminino"){
    $valorcompra = $valorcompra / 0.20
}

if(sexo == "Masculino"){
    $valorcompra = $valorcompra / 0.5
}


echo "O valor total é de: R$ $valorcompra ";
}
?>