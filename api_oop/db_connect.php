<?php
class DB {
  private $conn;

  public function __construct() {
    // Inclua o arquivo config.php para obter as informações de acesso ao banco de dados
    require_once('config.php');

    // Crie uma nova conexão usando MySQLi
    $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Verifique se ocorreu algum erro de conexão
    if ($this->conn->connect_error) {
      die("Erro de conexão com o banco de dados: " . $this->conn->connect_error);
    }
  }

  public function get_connection() {
    return $this->conn;
  }

  public function close_connection() {
    $this->conn->close();
  }
}
