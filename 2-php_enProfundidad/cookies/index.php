

<?php
    setcookie("micookie","valor mi cookie");
    setcookie("unyear","365 dias",time()+(60*60*24*365));
    
    header('location:ver_cookies.php');

    
?>
