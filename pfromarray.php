<?php
if (isset($_POST['sumbit'])){
    $nama   =   $_POST['nama'];      
      $kelas   =   $_POST['kelas']; 
      var_dump($nama);

      foreach ($nama as $data =>$val){
          echo "Nama Saya : " .$nama[$data] .
          "Kelas : " . $kelas[$data] . "<hr>";
      }
}