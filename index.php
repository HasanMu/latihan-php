<html>
<head>
    <title>Index</title>
    <style>
    :root {
  background: #f5f6fa;
  color: #9c9c9c;
  font: 1rem "PT Sans", sans-serif;
}
html, body, .container {
  height: 100%;
}
a {
  color: inherit;
}
a:hover {
  color: #7f8ff4;
}
.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.uppercase {
  text-transform: uppercase;
}
.btn {
  display: inline-block;
  background: transparent;
  color: inherit;
  font: inherit;
  border: 0;
  outline: 0;
  padding: 0;
  transition: all 200ms ease-in;
  cursor: pointer;
}
.btn--primary {
  background: #7f8ff4;
  color: #fff;
  box-shadow: 0 0 10px 2px rgba(0, 0, 0, .1);
  border-radius: 2px;
  padding: 12px 36px;
}
.btn--primary:hover {
  background: #6c7ff2;
}
.btn--primary:active {
  background: #7f8ff4;
  box-shadow: inset 0 0 10px 2px rgba(0, 0, 0, .2);
}
.btn--inside {
  margin-left: -96px;
}
.form__field {
  width: 800px;
  background: #fff;
  color: #a3a3a3;
  font: inherit;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, .1);
  border: 0;
  outline: 0;
  padding: 22px 18px;
}

    </style>
</head>
<body><center>
    <table>
        <tr>
            <td><div class="container">
	                <div class="container__item">
		                <form class="form" method="GET">
			                <input type="text" name="caarii" class="form__field" placeholder="Cari File .PHP"/>
			                <button type="button" name="cari" class="btn btn--primary btn--inside uppercase">Cari</button>
                           
		                </form>
                        <?php 
                                
                                
                                if(isset($_GET['cari'])){
                                    $page = $_GET['caarii'];
                             
                                    switch ($page) {
                                        case 'array01.php':
                                            include "index.php?page=array01.php";
                                            break;
                                        case 'tentang':
                                            include "halaman/tentang.php";
                                            break;
                                        case 'tutorial':
                                            include "halaman/tutorial.php";
                                            break;			
                                        default:
                                            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                                            break;
                                    }
                                }else{
                                    
                                }
                             
                            ?>
	                </div>
	                <div class="container__item container__item--bottom">
		                <p>Inspired by Hasan Muhammad.</p>
	                </div>
                </div>
            </td>
        </tr>
    </table></center>
</body>
</html>

<?php
    echo "Hasan Muhammad<br>";

    function fungsi(){
        echo "Hai";
    }

    fungsi();

$string1='contoh string';
$string2='contoh tanda petik: A\'Laikum"';
$string3='Document root C:\\xampp\\htdoc';
 
echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";

$nama = array(1, 2, 3);

echo $nama[0]."<br>";
echo $nama[2];

print_r($nama);

echo '<br><hr><br>';

?>