<?php
$fungsi = array(
    'addslashes()' => "menambahkan backslashes (\) di setiap tanda kutip (quote) dalam string.",
    'chr()' => "menghasilkan karakter dari bilangan ASCII",
    'crypt()' => "menghasilkan string terenkripsi searah.",
    'echo()' => "menampilkan satu atau beberapa string.",
    'explode()' => "memecah string berdasarkan suatu delimiter (separator).",
    'htmlentities ()' => "mengubah semua tag html menjadi HTML entities.",
    'htmlspecialchars()' => "mengubah semua karakter khusus menjadi HTML entities",
    'implode()' => "menggabungkan elemen array menjadi string dengan suatu delimiter (separator).",
    'join()' => "sama dengan implode()",
    'ltrim()' => 'menghapus karakter tertentu (“ “, \t, \n, \r, \0, \x0B) di awal string.',
    'md5()' => "menghasilkan string terenkripsi searah.",
    'nl2br()' => 'menambahkan HTML line break sebelum semua baris baru dalam string.',
    'number_format()' => "mengatur format angka",
    'ord()' => "menghasilkan kode ASCII dari suatu karakter.",
    'rtrim()' => ''
);

echo "<pre>";
print_r($fungsi);
echo "</pre>";