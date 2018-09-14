<!DOCTYPE html>
<html>
<head>
    <title>Sistem Raport Sederhana</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ruslan+Display" rel="stylesheet">
</head>
<body bgcolor="#75a6f4">
    <form action="data.php" method="post">
    <center>
    <table border="0" style="background: white; margin: 80px; padding: 30px;">
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><h1><font style="font-family: 'Ruslan Display', cursive;">Tugas</font></h1></td>
        <tr>
            <td><font style="font-family: 'Ubuntu', sans-serif; ">Nama  </font></td>
            <td>:</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td><font style="font-family: 'Ubuntu', sans-serif; ">NIS  </font></td>
            <td>:</td>
            <td><input type="number" name="nis" required><br></td>
        </tr>
        <tr>
            <td><font style="font-family: 'Ubuntu', sans-serif; ">Alamat    </font></td>
            <TD>:</TD>
            <td><textarea name="alamat" cols="30" rows="10" required></textarea></td>
        </tr>
        <tr>
            <td><font style="font-family: 'Ubuntu', sans-serif; ">Jenis Kelamin  </font></td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value="Laki-laki"><font style="font-family: 'Ubuntu', sans-serif; " selected> Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan"><font style="font-family: 'Ubuntu', sans-serif; "> Perempuan
            </td>
        </tr>
        <tr>
            <td><font style="font-family: 'Ubuntu', sans-serif; ">Agama </td>
            <td>:</td>
            <td><select name="agama">
                    <option value="Islam" name="islam">Islam</option>    
                    <option value="Buddha" name="buddha">Buddha</option>    
                    <option value="Kristen" name="kristen">Kristen</option>    
                    <option value="Khonghu chu" name="khonghu_chu">Khonghu chu</option>
                    <option value="Lainnya" name="lainnya">Lainnya</option>    
                </select>
            </td>
        </tr>
        <tr>
            <td><font style="font-family: 'Ubuntu', sans-serif; ">Asal Sekolah </td>
            <td>:</td>
            <td><input type="text" name="asal_sekolah"></td>
        </tr>
        <tr>
            <td><font style="font-family: 'Ubuntu', sans-serif; ">Email </td>
            <td>:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td><font style="font-family: 'Ubuntu', sans-serif; ">Nama orang tua/Wali</td>
            <td>:</td>
            <td><input type="text" name="orang_tua"></td>
        </tr>
        <tr>
            <td><font style="font-family: 'Ubuntu', sans-serif; ">Mata Pelajaran Yang Disukai</td>
            <td>:</td>
            <td><input type="checkbox" name="mata_pelajaran" value="Produktif"> Produktif
                <input type="checkbox" name="mata_pelajaran1" value="B. Indonesia"> B. Indonesia
                <input type="checkbox" name="mata_pelajaran2" value="Fisika"> Fisika<br>
                <input type="checkbox" name="mata_pelajaran3" value="Biologi"> Biologi
                <input type="checkbox" name="mata_pelajaran4" value="Matematika"> Matematika
                <input type="checkbox" name="mata_pelajaran5" value="Ips"> Ilmu Pengetahuan Sosial
            </td>
        </tr>
        <tr>
            <td><font style="font-family: 'Ubuntu', sans-serif; ">Total Nilai Ijazah SD</td>
            <td>:</td>
            <td><input type="tnumber" name="nilai_ijazah"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" value="Kirim" name="kirim"></td>
        </tr>
    </table>
    </center>
    </form>
    
</body>
</html>