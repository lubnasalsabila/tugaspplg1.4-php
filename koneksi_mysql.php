<?php
$server=mysqli_connect("localhost", "root", "", "latihan_xpplg");

if($server){
    echo "berhasil <br/>";
}
else{
    echo "gagal";
}

//query insert data dalam database

$sql = "insert into profile (nama, nis, rombel, alamat, tanggallahir, umur, sekolah)
values
('siti lubna', '12209428', 'PPLG X-4', 'Bogor-Indonesia', '2007/07/18', '15', 'SMK Wikrama bogor')";

if(mysqli_query($server, $sql)) {
    echo "yuhuuuu penyimpanan berhasil.......";
}
else{
    echo "yahhhh gagal yuk ulangi lagi";
}
?>