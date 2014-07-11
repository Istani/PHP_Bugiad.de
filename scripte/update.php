<?php
    // Neue Git Daten hohlen 
    system('git pull');
    
    // Changelog schreiben 
    ob_start();
    system('git log --no-merges --date=iso8601 --pretty=format:"%ad : %s (%an)"');
    $tmp_text=ob_get_contents();
    ob_end_clean();
    $tmp_file=fopen("../README","w");
    fwrite("PHP_Bugiad.de\n",$tmp_file);
    fwrite("=============\n",$tmp_file);
    fwrite($tmp_text,$tmp_file);
    fclose();
    
    system('git add .');
    system('git commit -am "Aenderungen übernehmen"');
    system('git push');
?>