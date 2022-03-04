<!-- <?php require('header.php'); ?>
    -->

<main>
<?php
    $user = 'abi';
    $password = '123';
    
    if(isset($_POST['submit'])){
        if($_POST['nama'] == $user && 
            $_POST['password'] == $password
        ){
            echo 'berhasil';
        }
     
        else{
            echo 'gagal login';
        }
    }

?>
<form action="index.php" method="post">
    <input type="text" name='nama'>
    <input type="password" name='password'>
    <input type="submit" name="submit">
</form>
</main>
<!-- <?php require('footer.php');?>

   -->
