<?php
    //select
    include_once 'db_connect.php';

    $sql = "SELECT * FROM veiculos";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"] . " - Marca: " . $row["marca"] . " - Modelo: " . $row["modelo"] . " - Ano: " . $row["ano"] . " - Preço: " . $row["preco"] . "<br>";
        }
    } else {
        echo "0 resultados";
    }

    mysqli_close($conn);
?>
