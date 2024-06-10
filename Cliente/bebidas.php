<?php

$sql = "SELECT NOME, DESC_PROD, PRECO FROM produtos WHERE TIPO = 'drink'";
$res = $conn->query($sql);


if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo '<div class="menu-item">';
    
        if (!empty($row["FOTO"])) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["FOTO"]) . '" alt="Imagem do produto">';
        } else {
            
            echo '<img src="./img/bebida.jpg" alt="Imagem padrão">';
        }
        echo '<div class="menu-item-description">';
        echo '<p>' . $row["NOME"] . '</p>';
        echo '<p>' . $row["DESC_PROD"] . '</p>';
        echo '<div class="quantity-control">';
        echo '<button onclick="adjustQuantity(\'comida' . $row["NOME"] . '\', -1, 5.00)">-</button>';
        echo '<span id="quantity-comida' . $row["NOME"] . '">0</span>';
        echo '<button onclick="adjustQuantity(\'comida' . $row["NOME"] . '\', 1, 5.00)">+</button>';
        echo '<button onclick="alert(\'Adicionado ao carrinho\')">' . $row["PRECO"] . '</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "Nenhum produto encontrado.";
}
$conn->close();
