<?php

    // Damit diese Datei nachher aus den GIT raus kann
    $mysql['host'] = "127.0.0.1";
    $mysql['user'] = "root";
    $mysql['pw'] = "";
    $mysql['db'] = "bugiad";

    $database = new db("mysql", $mysql['host'], $mysql['user'], $mysql['pw']);
    $database->connect_db($mysql['db']);
?>