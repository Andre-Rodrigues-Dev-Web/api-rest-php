<?php
require_once('db_connect.php');

try {
  // Criar uma nova instância da classe DB
  $db = new DB();

  // Obter a conexão com o banco de dados
  $conn = $db->get_connection();

  // Consultar a tabela "veiculos" e obter todos os dados
  $sql = "SELECT * FROM veiculos";
  $result = $conn->query($sql);

  // Verificar se há dados na tabela
  if ($result->num_rows > 0) {
    // Criar um array para armazenar os resultados
    $veiculos = array();

    // Iterar sobre cada linha de dados e adicionar ao array
    while($row = $result->fetch_assoc()) {
      $veiculos[] = $row;
    }

    // Converter o array em um objeto JSON e imprimir na tela
    echo json_encode($veiculos);
  } else {
    // Se não houver dados, retornar uma mensagem de erro em JSON
    $erro = array("mensagem" => "Não há dados na tabela 'veiculos'");
    echo json_encode($erro);
  }

  // Fechar a conexão com o banco de dados
  $db->close_connection();
} catch (Exception $e) {
  // Em caso de erro, imprimir a mensagem de erro em JSON
  $erro = array("mensagem" => "Erro ao listar dados da tabela 'veiculos': " . $e->getMessage());
  echo json_encode($erro);
}
?>
