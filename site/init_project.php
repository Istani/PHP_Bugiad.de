<?php

    // Damit diese Datei nachher aus den GIT raus kann
    $database = new db("mysql", "127.0.0.1", "root");
    $database->connect_db("bugiad");
?>