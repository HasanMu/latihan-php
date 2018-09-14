
<html>
<head>
    <title>Form Login</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
function validateForm() {
    var x = document.forms["myForm"]["email1"].value;
    var y = document.forms["myForm"]["pass1"].value;
    if (x == "admin@gmail.com"&&y=="123456") {
        swal("Login berhasil","Mohon tunggu sebentar...","success");
        return false;
    }
    else {
        swal("Login Gagal!","Silahkan periksa kembali Email dan Password anda!","error");
        return false;
    }
}
</script>
<link rel="shorcut icon" href="data:image/jpeg;base64,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">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Sign In</h2>
        </div>
        <div class="artikel">
            <form action="login.php" method="post" onsubmit="return validateForm()" name="myForm">
                <div class="grup">
                    <label for="email">E-mail Address</label>
                    <input type="text" placeholder="Masukkan Alamat Email Anda" name="email1" required>
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Masukkan password Anda" name="pass1" required>
                </div>
                <div class="grup">
                    <input type="submit" value="Sign In" name="akses">
                    <?php
    if (isset($_POST['akses'])) {
        $email =  $_POST['email1'];
        $pass = $_POST['pass1'];
        
    }
    ?>
                </div>
            </form>
        </div>
    </div>
    <style type="text/css">
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body{
    background: #c0c0c0;
}

div.konten{
    background: #ffffff;
    width: 350px;
    margin: 222px auto 0;
    border-radius: 16px;
    min-height: 256px;
    overflow: hidden;
}

div.kepala{
    background: #f85252;
    padding: 10px 22px;
    height: 60px;
}

div.kepala h2.judul{
    color: #fff;
    font-weight: normal;
    line-height: 40px;
    display: inline-block;
}

div.lock{
    background-image: url("lock.png");
    background-position: center;
    background-size: 38px;
    display: inline-block;
    width: 25px;
    height: 25px;
    margin-top: 8px;
    float: left;
    margin-right: 10px;
}

div.artikel{
    padding:10px 22px 0;
    color: #808080;
}

div.artikel div.grup{
    margin: 16px 0;
}

div.artikel div.grup label,
div.artikel div.grup input{
    display: block;
}

div.artikel div.grup label{
    font-size: 13px;
    margin-bottom: 10px;
}

div.artikel div.grup input[type="text"],
div.artikel div.grup input[type="password"]{
    width: 100%;
    height: 30px;
    padding: 0 10px;
    background: #eeeeee;
    border:none;
    color: #808080;
}

div.artikel div.grup input[type="submit"]{
    background: #33cd77;
    padding: 4px 16px;
    margin: 0 auto;
    border: 1px solid #33cd77;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
}

div.artikel div.grup input[type="submit"]:hover{
    background: #28a45e;
}
</style>
</body>
</html>

