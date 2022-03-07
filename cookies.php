<?php

session_start();

$user = 'abi';
$password = '123';

if(isset($_POST['submit'])){
    if($_POST['nama'] == $user && 
        $_POST['password'] == $password){

        //cookie
        //setcookie(key, nilai, expire)
            // setcookie('nama_user', $_POST['nama'], time()+120);
    $_SESSION['nama_user'] = $_POST['nama'];
    header('Location: profil.php?nama=' .$user);
      
    }else{
        echo 'gagal login';
    }
}

?>

<form action="cookies.php" method='post'>
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>