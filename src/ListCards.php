<?php
require("Database.php");

$database = new App\Database();

$cards = $database->mysql->query("select * FROM enquiry_cards_table");

echo "<ul>";
foreach ($cards as $card) {
    echo "
    <li> {$card["name"]} - {$card["title"]} - {$card["date"]} - {$card["id"]} </li>";
}

echo "</ul>";


?>

<a href="src/CreateConsultory.php">NUEVO</a>