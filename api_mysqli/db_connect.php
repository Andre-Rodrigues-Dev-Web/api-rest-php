<?php
// Definir as constantes de acesso ao banco de dados
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'carinsta');

// Conectar ao banco de dados MySQL usando MySQLi
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificar se a conexão foi bem sucedida
if (!$conn) {
    die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
}
?>
