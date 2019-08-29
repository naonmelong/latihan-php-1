<?php 
if (isset($_POST['simpan'])) {       
      $nama   =   $_POST['nama'];     
      $jalan   =   $_POST['jalan'];
      $kecamatan   =   $_POST['kecamatan'];      
      $kota   =   $_POST['kota'];      
      $provinsi   =   $_POST['provinsi'];      
      $kode   =   $_POST['kodepos'];
      $nmbrng   =   $_POST['nmbrng'];
      $hrg   =   $_POST['hrgbarang'];
      $jmlh   =   $_POST['jmlhbarang'];      
      $deskripsi   =   $_POST['deskripsi'];      
      $tgl   =   $_POST['tgl'];
      $bayar   =   $_POST['bayar'];
      $hrs   =   $_POST['hrs'];

}
          $bayar=($hrg*$jmlh); {
      
       
          }
          if ($jmlh > 5){
          $diskon=($bayar*10/100);
          $hrs=($bayar-$diskon);
          }
          if($jmlh > 100){
          $diskon=($bayar*50/100);
          $hrs=($bayar-$diskon);

          }elseif ($jmlh < 0 ){
              echo "Tidak Dapat Di Proses";
          }
        
      echo "Nama           :" . $nama. "<br>";    
      echo "Alamat   :" . $jalan. "<br>";    
      echo "Kecamatan  :" . $kecamatan. "<br>";    
      echo "Kota   :" . $kota. "<br>";
      echo "Provinsi  :" . $provinsi. "<br>";   
      echo "KodePos        :" . $kode. "<br>";    
      echo "Nama Barang      :" . $nmbrng. "<br>";
      echo "Harga Barang :" . $hrg. "<br>";
      echo "Jumlah Barang       :" . $jmlh. "<br>";        
      echo "Deskripsi  :" . $deskripsi. "<br>";
      echo "Tanggal Pebelian           :" . $tgl. "<br>";
      echo "Bayar           :" . $bayar. "<br>";
      echo "Harus Bayar           :" . $hrs. "<br>";
      
?>