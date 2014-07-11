<?php
    // Neue Git Daten hohlen 
    system('git pull');
    
    // Changelog schreiben 
    ob_start();
    system('git log --no-merges --date=iso8601 --pretty=format:"%ad : %s (%an)"');
    $tmp_text=ob_get_contents();
    ob_end_clean();
    fopen("../README","w");
    fwrite("PHP_Bugiad.de\n");
    fwrite("=============\n");
    fwrite($tmp_text);
    fclose();
    
    system('git add .');
    system('git commit -am "Aenderungen übernehmen"');
    system('git push');
?>