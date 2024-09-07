<html>
    <body>
        <h1>
            <?php
$produtos = [
    ["nome" => "Produto 1", "preco" => 50.00],
    ["nome" => "Produto 2", "preco" => 75.00],
    ["nome" => "Produto 3", "preco" => 100.00],
    ["nome" => "Produto 4", "preco" => 125.00],
    ["nome" => "Produto 5", "preco" => 150.00],
    ["nome" => "Produto 6", "preco" => 175.00],
    ["nome" => "Produto 7", "preco" => 200.00],
    ["nome" => "Produto 8", "preco" => 225.00],
    ["nome" => "Produto 9", "preco" => 250.00],
    ["nome" => "Produto 10", "preco" => 275.00],
];

foreach ($produtos as $produto) {
    echo "Nome: " . $produto['nome'] . " - Preço: R$" . $produto['preco'] . "<br>";
    echo "<a href='#'>Adicionar ao carrinho</a><br><br>";
}
?>
</h1>
    </body>
        </html>
