<?php
    if (isset($_POST['kirim'])) {
        $saran = nl2br($_POST['saran']);
        echo 'Kritik / Saran adalah :<br>'.$saran;
    }
?>