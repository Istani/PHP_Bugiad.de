<?php
    function text($text_art, $text_lfd, $sprache, $datenbank) {
        $text_array=$datenbank->sql_select("sta_texte", $sprache, "art='".$text_art."' AND lfd='".$text_lfd."'");
        if (isset($text_array[0])) {
            return $text_array[0];
        } else {
            $text="";
            if ($sprache!="DE") {
                $text=text($text_art, $text_lfd, "DE", $datenbank);
            }
            $exit['art']=$text_art;
            $exit['lfd']=$text_lfd;
            $exit[$sprache]="Texterror (".$text_art.")";
            $datenbank->sql_insert_update("sta_texte", $exit);
        }
    }
?>