<?php
    $sprachen_array=$database->sql_select("sta_texte", "*", "true=false",true);
    unset($sprachen_array['art']);
    unset($sprachen_array['lfd']);
    foreach ($sprachen_array as $key=>$value) {
        echo '<a href="?sprache='.$key.'"><img src="img/flaggen/'.$key.'.png"></a>&nbsp;';
    }
?>