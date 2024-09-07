<html>
    <body>
        <h1>
<?php
$times = [
    ["nome" => "Flamengo", "estado" => "RJ"],
    ["nome" => "Palmeiras", "estado" => "SP"],
    ["nome" => "Grêmio", "estado" => "RS"],
    ["nome" => "Cruzeiro", "estado" => "MG"],
    ["nome" => "Bahia", "estado" => "BA"],
    ["nome" => "Fortaleza", "estado" => "CE"],
    ["nome" => "Athletico-PR", "estado" => "PR"],
    ["nome" => "São Paulo", "estado" => "SP"],
    ["nome" => "Internacional", "estado" => "RS"],
    ["nome" => "Santos", "estado" => "SP"],
];

foreach ($times as $time) {
    echo "Time: " . $time['nome'] . " - Estado: " . $time['estado'] . "<br>";
}
?>
</h1>
    </body>
        </html>