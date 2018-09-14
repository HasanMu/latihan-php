<?php
    if (isset($_POST['pilih'])) {
        $anime = $_POST['anime'];
        echo 'Film Anime Favorit Kamu adalah :
            <font color="red"><b>'.$anime.'</b></font>';
    }
?>