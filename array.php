<?php
// array key numerik
$a = array('Sara' , 21 , true , 14.45);
echo $a[1];

for($i = 4; $i >= 0; $i--){
    echo $a[$i] , "<br>";

}

//array key asosiatif
$aso = ['nama' => 'Sara', 'umur' => 16,
        'alamat' => 'Bandung'];
        
foreach ($aso as $ina){
    echo $ina . "<br";
}