<?php
    $class_button = "class='ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only'";
    $class_drop = "class='ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-active'";
?>
<ul id="menu">
    <li <?php echo $class_button; ?>><a href="index.php" title="Home">Startseite</a></li>
    <li <?php echo $class_button; ?> id="Unternehmen"><a href="#" title="Unternehmen">Unternehmen</a>
	<ul>
	    <li <?php echo $class_drop; ?>><a href="index.php?seite=" title="Über Uns">Über Uns</a></li>
	    <li <?php echo $class_drop; ?>><a href="#" title="News">News</a></li>
	    <li <?php echo $class_drop; ?>><a href="#" title="Team">Team</a></li>
	    <li <?php echo $class_drop; ?>><a href="#" title="Kunden">Kunden</a></li>
	    <li <?php echo $class_drop; ?>><a href="#" title="Qualitätssicherung">Qualitätssicherung</a></li>
	</ul>
    </li>
    <li <?php echo $class_button; ?>><a href="#" title="Flyer">Flyer</a></li>
    <li <?php echo $class_button; ?>><a href="#" title="Download">Download</a></li>
    <li <?php echo $class_button; ?>><a href="#" title="Logistik">Logistik</a></li>
    <li <?php echo $class_button; ?>><a href="#" title="Webshop">Webshop</a></li>
</ul>