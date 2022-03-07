<?php
session_start();

if(isset($_SESSION['nama_user'])){
    echo 'ini adalah profil ' . $_SESSION['nama_user'];
    echo '<a href="logout.php"><br>Logout</a>';
}else{
    
    echo 'anda belum login.  ';
    echo 'Silahkan <a href="cookies.php"> Login</a>';
}
?>
<br>