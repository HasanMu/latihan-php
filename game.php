<!DOCTYPE html>
<?php

$pertanyaan = array(
    0 => array(
        'soal' => 'Siapakah pencipta bahasa program PHP?',
        'pilihan' => 'A. Ramus lerdorf |B. Steve Job |C. Bill gates',
        'jawaban' => 'A'
    ),
    1 => array(
        'soal' => 'Siapakah pencipta Microsoft?',
        'pilihan' => 'A. Abraham Lincoln |B. Steve Job |C. Bill gates',
        'jawaban' => 'C'
    ),
    2 => array(
        'soal' => 'Siapakah pencipta kuis ini?',
        'pilihan' => 'A. Ramus lerdorf |B. Hasan Muhammad |C. Bill gates',
        'jawaban' => 'B'
    )
);

if (isset($_GET['pilihan'])) {
    $total = 0;

    foreach ($_GET['pilihan'] as $a => $b)
        if (substr($b, 0, 1) == $pertanyaan[$a]['jawaban'])
            $total++;
            echo "
                    <script stype='text/javascript'>
                        alert('Skor anda : ".$total."');
                        var jwb = confirm('Ingin main lagi?');
                        if(jwb){
                            window.location = 'game.php';
                        } else {
                            window.location = 'game.php';
                        }
                    </script>
                    ";
        }
        $no = 1;
        $layout = '
                <div>
                    <div><br>%s. %s</div>
                    <div>%s</div>
                </div>
        ';

?>

<form>
    <?php
        foreach ($pertanyaan as $key => $value) {
            $pilihan = explode('|', $value['pilihan']);
            $radio = "";
            foreach ($pilihan as $h => $i) {
                $radio.= '<label><input type="radio" name="pilihan['.$key.']" value="'.$i.'">'.$i. '</label><br>';
            }
            printf($layout, $no++, $value['soal'], $radio);
        }
    ?>
    <br><br><br>
    <input type="submit" value="Hitung skor" name="hSkor">
</form>

<?php
    if (isset($_GET['hSkor'])== 'Hitung skor') {
        echo "
            <script style='text/javascript'>
                alert('Tidak boleh kosong');
            </script>
        ";
    }
?>