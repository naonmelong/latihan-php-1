<?php 
if (isset($_POST['regis'])) {
   $nama   =   $_POST['nama'];
   $alamat   =   $_POST['alamat'];
   $jeniskelamin   =   $_POST['jeniskelamin'];
   $agama   =   $_POST['agama'];      
   $email   =   $_POST['email'];      
   $pass   =   $_POST['password']; 
   
   if ($email == "saraazzahra67@gmail.com" && $pass == "123") {       
       echo   "<h2>Status aktif</h2>"; 
       echo $nama. "<br>";     
       echo $alamat. "<br>";    
       echo $jeniskelamin. "<br>";    
       echo $agama. "<br>";
       echo $email. "<br>"; 
       } else {  
        echo $nama. "<br>";     
    echo $alamat. "<br>";    
    echo $jeniskelamin. "<br>";    
    echo $agama. "<br>";
    echo $email. "<br>";     
        echo   "<h2>Status Tidak Aktif</h2>";    
    }   
} 
?> 