<?php
require("Database.php");

$database = new App\Database();

$cards = $database->mysql->query("select * FROM enquiry_cards_table");


foreach ($cards as $card) {
    echo <<<TAG
        <div "card border-primary mb-3" style="max-width: 18rem;"">
            <div class="card-body">            
                <h5  class="card-title" name="title">{$card["title"]}</h5>
                <h6 class="card-subtitle mb-2 text-muted"  name="name">{$card["name"]}</h6>
                <p class="card-text">ID:{$card["id"]}</p>
                <p class="card-text">Date:{$card["date"]}</p>
                </div>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-secondary send">Send</button>
                    <button type="button" class="btn btn-secondary cancel">Cancel</button>
                    <button type="button" class="btn btn-secondary edit">Edit</button>
                </div>            
                    
    TAG;
}


?>

<a href="src/CreateConsultory.php">NUEVO</a>