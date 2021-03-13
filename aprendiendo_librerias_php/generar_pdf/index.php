<?php

    require_once '../vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;

    $html2pdf= new Html2Pdf();

    ob_start();
    
    require_once 'pdf_para_generar.php';
    ob_end_clean();
    $html=ob_get_clean();

    $html2pdf->writeHTML($html);
    
    $html2pdf->output('pdf_generado.pdf');
    
?>