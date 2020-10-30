<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
    
</head>
<body>
    
<?php
use phpDocumentor\Reflection\Location;

require("Database.php");




if (!empty($_POST)) {
    $database = new App\Database();
    //echo "Enviado por método: POST";
    //var_dump($_POST);
    //echo "NAME: " . $_POST["name"];

    $database->mysql->query("INSERT INTO `enquiry_cards_table` (`name`, `title`) VALUES ('{$_POST["name"]}','{$_POST["title"]}');");

    header('Location: ../index.php');
}


?>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <form action="CreateConsultory.php" method="post">
            <input placeholder="Enquiry Title" class="card-title" type="text" name="title">
            <input placeholder="Coder Name"class="card-subtitle mb-2 text-muted" type="text" name="name">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="submit" class="btn btn-secondary send">Send</button>
                <button type="button" class="btn btn-secondary cancel">Cancel</button>
                <button type="button" class="btn btn-secondary edit">Edit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

