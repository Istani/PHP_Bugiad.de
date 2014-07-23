<?php

    include("site/init.php");
    include("function/_include.php");

    include("site/init_project.php");
    include("scripte/export_mysql.php");
    include("scripte/import_webshop.php");
    include("scripte/import_csv.php");

    include("scripte/select_pics.php");


    // Komplettes Update
    // Neue Git Daten hohlen
    system('git pull');

    // Changelog schreiben
    ob_start();
    system('git log --no-merges --date=iso8601 --pretty=format:"%ad : %s (%an)"');
    $tmp_text = ob_get_contents();
    ob_end_clean();
    $tmp_file = fopen("README", "w");
    fwrite($tmp_file, "PHP_Bugiad.de\n");
    fwrite($tmp_file, "=============\n");
    fwrite($tmp_file, "\n");
    fwrite($tmp_file, $tmp_text);
    fclose($tmp_file);
    // Changelog Ã„nderungen hochladen um eine Saubere Version zu haben?
    system('git add .');
    system('git commit -am "UPDATE: Aenderungen uebernehmen"');
    //system('git push'); //Klappt bei mir im Windows nicht, später nach schauen!
?>