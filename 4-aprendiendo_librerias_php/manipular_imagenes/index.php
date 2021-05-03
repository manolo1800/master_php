<?php
    require_once '../vendor/autoload.php';

    $foto_original="Pictures/mysql.png";
    $guardar_en="foto_mod.jpg";

    $thumb= new PHPThumb\GD($foto_original);
    $thumb->resize(1250,1250);

    $thumb->show();
    $thumb->save($guardar_en);
?>