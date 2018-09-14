<?php
    //contoh 1
    $buah = "mangga pisang rambuan kadongdong apel";
    $buahan = explode(" ", $buah);
    echo $buahan[0];
    echo $buahan[3];

    //contoh 2
    $data = "foo:*:1023:1000::/home/foo:/bin/sh";
    list($user, $pass, $uid, $gid, $gecos, $home, $shell) =
    explode(":", $data);
    echo $user."<br>";
    echo $pass;
?>