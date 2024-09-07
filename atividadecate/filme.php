<html>
    <body>
        <h1>
<?php
$filmes = [
    ["nome" => "O Poderoso Chefão", "duracao" => "175 min", "genero" => "Drama"],
    ["nome" => "Star Wars", "duracao" => "121 min", "genero" => "Ficção Científica"],
    ["nome" => "Vingadores: Ultimato", "duracao" => "181 min", "genero" => "Ação"],
    ["nome" => "Parasita", "duracao" => "132 min", "genero" => "Suspense"],
    ["nome" => "Forrest Gump", "duracao" => "142 min", "genero" => "Drama"],
];

foreach ($filmes as $filme) {
    echo "Filme: " . $filme['nome'] . " - Duração: " . $filme['duracao'] . " - Gênero: " . $filme['genero'] . "<br>";
}
?>
    </h1>
     </body>
    </html>