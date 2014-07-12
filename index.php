<?php
    //ob_start();
    //include("update.php");
    //ob_end_clean();
    include("site/header.php");
    echo '<table>';
    echo '<tr>';
    echo '<td>';
    include("site/artikelgruppen.php");
    echo '</td>';
    echo '<td>';
    echo text("Willkommen", 0, $_SESSION['lang'], $database);
    echo '</td>';
    echo '</tr>';
    echo '<table>';
?>
</div>
</body>
</html>