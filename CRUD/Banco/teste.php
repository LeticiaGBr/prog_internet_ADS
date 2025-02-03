<?php
include 'Database.php';

$conn = conectar();
if ($conn) {
    echo "Conexão bem-sucedida!";
} else {
    echo "Erro na conexão.";
}
?>