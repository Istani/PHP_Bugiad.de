<?php
    include_once("site/header.php");
    if ($_SESSION['User_Status'] > 0) {
	include_once("content/admin/admin_menu.php");
    }
    echo '<table>';
    echo '<tr>';
    echo '<td>';
    include_once("site/artikelgruppen.php");
    echo '</td>';
    echo '<td>';
    //echo var_dump($fehler_meldung);
    include_once($incpage);
    echo '</td>';
    echo '</tr>';
    echo '<table>';
?>
</div>
</body>
</html>