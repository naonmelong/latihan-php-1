<!DOCTYPE html>
<html>
<head><title>formulir </title></head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<FORM ACTION="prosesf2.php" METHOD="POST" NAME="simpan">
            
        NAMA   : <br><input type="text" name="nama"><br>
        ALAMAT        :<br><textarea type="text" cols=50 rown=50 ></textarea><br> 
        KECAMATAN          :<br><input type="text" name="kecamatan"><br> 
        KOTA         : <br><input type="text" name="kota"><br>         
        PROVINSI      : <br><input type="text" name="provinsi"><br>  
        KODE POS      : <br><input type="number" name="kodepos"><br>
        NAMA BARANG      : <br><input type="text" name="nmbrng"><br>
        HARGA BARANG      : <br><input type="number" name="hrgbarang"><br>
        JUMLAH BARANG      : <br><input type="number" name="jmlhbrng"><br>
        DESKRIPSI      : <br><input type="text" name="deskripsi"><br>
        TANGGAL PEMBELIAN      : <br><input type="date" name="tgl"><br>
        BAYAR      : <br><input type="number" name="byr"><br>

         <input type="submit" name="simpan" value="simpan">           
        <input type="reset" name="reset" value="Reset">


     </FORM>    

    
</body>
</html>
        