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
    include($incpage);
    echo '</td>';
    echo '</tr>';
    echo '<table>';
?>
</div>
</body>
</html>