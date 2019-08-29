<?php 
if (isset($_POST['simpan'])) {  
      $nodftr   =   $_POST['nopendaftaran'];      
      $nisn   =   $_POST['nisn'];      
      $nama   =   $_POST['nama'];
      $alamat   =   $_POST['alamat'];      
      $tempat   =   $_POST['tempat'];
      $tanggal   =   $_POST['tanggal'];      
      $as   =   $_POST['as'];      
      $jk   =   $_POST['jeniskelamin'];      
      $jrsn   =   $_POST['jurusan'];
      $nma   =   $_POST['namaayah'];
      $pekerayah   =   $_POST['pekerjaan'];
      $nmb   =   $_POST['namaibu'];      
      $pekeribu   =   $_POST['pekerjaanibu'];      
      $hobi   =   $_POST['hobi'];      
      $agama   =   $_POST['agama'];      
               
      echo "No Pendaftaran :" . $nodftr . "<br>";     
      echo "NISN           :" . $nisn. "<br>";    
      echo "Nama           :" . $nama. "<br>";    
      echo "Alamat         :" . $alamat. "<br>";
      echo "Tempat Lahir   :" . $tempat. "<br>";    
      echo "Tanggal Lahir  :" . $tanggal. "<br>";    
      echo "Asal Sekolah   :" . $as. "<br>";
      echo "Jenis Kelamin  :" . $jk. "<br>";
      echo "NISN           :" . $nisn. "<br>";    
      echo "Jurusan        :" . $jrsn. "<br>";    
      echo "Nama Ayah      :" . $nma. "<br>";
      echo "Pekerjaan Ayah :" . $pekerayah. "<br>";
      echo "Nama Ibu       :" . $nmb. "<br>";        
      echo "Pekerjaan Ibu  :" . $pekeribu. "<br>";
      echo "Hobi           :" . $hobi. "<br>";
      echo "Agama          :" . $agama. "<br>";




    } 
?>