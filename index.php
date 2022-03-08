<?php

$connect = mysqli_connect('localhost', 'root', '', 'sekolah');

if(!$connect){
    echo 'ada yang error di ' .mysqli_connect_error();
}

$query = 'SELECT * FROM murid';
$hasil = mysqli_query($connect, $query);

if(mysqli_num_rows($hasil) > 0){
    while($data = mysqli_fetch_assoc($hasil)){
        echo $data['nama'] ." ";
        echo $data['alamat']. " ";
        echo $data['id'] . "<br>";
    }
}


mysqli_close($connect);

?>