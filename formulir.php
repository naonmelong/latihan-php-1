<!DOCTYPE html>
<html>
<head><title>formulir pendaftaran</title></head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<FORM ACTION="prosesf.php" METHOD="POST" NAME="simpan">     
        <h2>Formulir Pendaftaran</h2>            
        NO PENDAFTARAN   : <br><input type="number" name="nopendaftaran"><br>
        NISN        : <br><input type="number" name="nisn"><br>
        NAMA : <br><input type="text" name="nama"><br>
        ALAMAT         : <br><textarea type="text" cols=50 rown=50 ></textarea><br> 
        TEMPAT LAHIR         : <br><input type="text" name="tempat"><br>         
        TANGGAL LAHIR      : <br><input type="date" name="tanggal"><br>  
        ASAL SEKOLAH      : <br><input type="text" name="as"><br> 
        JENIS KELAMIN :<br><input type="radio" name="jeniskelamin" value="perempuan"> 
PEREMPUAN<br><br> 
    <input type="radio" name="jeniskelamin" value="laki laki"> 
LAKI-LAKI<br>   
        JURUSAN :<select   name="jurusan">          
        <option value="RPL">RPL</option>              
        <option   value="TKR">TKR</option>                
        <option   value="TSM">TSM</option></select><br>
        NAMA AYAH: <br><input type="text" name="namaayah"><br>
        PEKERJAAN AYAH : <br><input type="text" name="pekerjaan"><br>
        NAMA IBU : <br><input type="text" name="namaibu"><br>
        PEKERJAAN IBU : <br><input type="text" name="pekerjaanibu"><br>
        HOBI : <select   name="hobi">         
        <option value="Berenang">Berenang</option>              
        <option   value="Volly">Volly</option>                
        <option   value="Bulutangkis">BuluTangkis</option>                
        <option   value="Basket">Basket</option></select><br>
        AGAMA : <select   name="agama">          
        <option value="Islam">Islam</option>              
        <option   value="Kristen">Kristen</option>                
        <option   value="Budha">Budha</option>                
        <option   value="Hindu">Hindu</option> 
        <option   value="Katolik">Katolik</option>                
        <option   value="Kong Hu Cu">Kong Hu Cu</option></select>
        <input type="submit" name="simpan" value="simpan">           
        <input type="reset" name="reset" value="Reset">


     </FORM>    

    
</body>
</html>