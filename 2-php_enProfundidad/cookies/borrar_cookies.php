<?php 
    if (isset($_COOKIE["micookie"])){
            
        unset($_COOKIE["micookie"]);
        setcookie("micookie","",time()-100);

    };
    header('location:ver_cookies.php');//redireccionar
?>