<?php

include_once("database.php");
function insere_usuario($nome, $email){
$db = connecta_db();
$sql = "insert into usuario (nome, email) values (?, ?)";
$stmt = $db->prepare($sql);
$stmt->bindValue(1, $nome, PDO::PARAM_STR);
$stmt->bindValue(2, $email, PDO::PARAM_STR);
$stmt->execute();

try {($db->exec( 'show tables')); 
} catch (PDOException $e){
    echo "". $e->getMessage()."";
};
$db=null;
}

function recupera_lista_usuarios(){
    $db= connecta_db();
    $sql = "select * from usuario";
$stmt = $db->prepare ($sql);
$stmt->execute();
$resultado =$stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($resultado);

}

?>