<?php
$nama = "Randi";
$nilai = 80;
$absen  = 70;

if($nilai >= 80 && $absen >= 80){
    echo "{$nama}, Nilai Anda A ".PHP_EOL;
}else if($nilai  >=70 && $absen >=70){
    echo "{$nama}, Nilai Anda B". PHP_EOL;
}else{
    echo "COBA LAGI";
}

// aLTERNATIF:
if($nilai >= 80 && $absen >= 80):
    echo "{$nama}, Nilai Anda A ".PHP_EOL;
elseif($nilai  >=70 && $absen >=70):
    echo "{$nama}, Nilai Anda B". PHP_EOL;
else:
    echo "COBA LAGI";
endif;
?>