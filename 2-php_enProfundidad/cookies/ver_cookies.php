<html>
<body>
    <?php
        if (isset($_COOKIE["micookie"])){
            
            echo "value is: " . $_COOKIE["micookie"];
        }else{
            echo "cookie name is not set";
        };
        echo "<br>";
        if (isset($_COOKIE["unyear"])){
            
            echo "value is: " . $_COOKIE["unyear"];
        }else{
            echo "cookie name is not set";
        };
        echo "<br><h2><a href='borrar_cookies.php'>borrar cookies</a></h2><br>";
        echo "<h2><a href='index.php'>crear cookies</a></h2>";
    ?>
</html>
</body>