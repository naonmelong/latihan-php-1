<!DOCTYPE html>
<html>
<head><title>fromarray </title></head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <center>
        <p>FROM ARRAY</p>
    </center>
    <fieldset>
        <legend>FROM ARRAY</legend>
<FORM ACTION="" METHOD="GET">
    <label for="">Masukan Jumlah</label>
    <input type="number" name="jml">
    <br>
    <input type="sumbit" name="sumbit" value="simpan">
    <br>
</FORM>

<?php
if (insset($_GET["jml"])) {
    $jml_from = $_GET["jml"];
    for ($a = 1; $a <= $jml_from; $a++){
        ?>
        <FORM ACTION="pfromarray.php" METHOD="POST">
            <label for="">Nama</label>
            <input type="text" name="nama[]" required>
            <label for="">Kelas</label>
            <input type="text" name="kelas[]" required>
            <br>
            <br>
    
    <?php } ?>
    <input type="sumbit" name="sumbit" value="simpan">
    <input type="reset" value="simpan">
    </FORM>
    <?php {
        ?>
    </fleidset>
   }
}
    
</body>
</html>