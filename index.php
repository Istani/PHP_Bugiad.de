<?php
    //ob_start();
    //include("update.php");
    //ob_end_clean();
    include("site/header.php");
    if ($_SESSION['User_Status'] > 0) {
	include("content/admin/admin_menu.php");
    }
    echo '<table>';
    echo '<tr>';
    echo '<td>';
    include("site/artikelgruppen.php");
    echo '</td>';
    echo '<td>';
    //echo var_dump($fehler_meldung);
    include($incpage);
    echo '</td>';
    echo '</tr>';
    echo '<table>';
?>
</div>
</body>
</html>