<?php
    // Neue Git Daten hohlen 
    system('git pull');
    
    // Changelog schreiben 
    //ob_start();
    system('git log --no-merges --date=iso8601 --pretty=format:"%ad : %s (%an)"');
    $tmp_text=ob_get_contents();
    ob_end_clean();
    $tmp_file=fopen("README","w");
    fwrite($tmp_file,"PHP_Bugiad.de\n");
    fwrite($tmp_file,"=============\n");
    fwrite($tmp_file,"test\n");
    fwrite($tmp_file,$tmp_text);
    fclose($tmp_file);
    
    system('git add .');
    system('git commit -am "Aenderungen übernehmen"');
    system('git push');
?>