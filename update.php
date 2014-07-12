<?php

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
    // Changelog Änderungen hochladen um eine Saubere Version zu haben?
    system('git add .');
    system('git commit -am "Aenderungen uebernehmen"');
    //system('git push'); //Klappt bei mir im Windows nicht, sp�ter nach schauen!
?>