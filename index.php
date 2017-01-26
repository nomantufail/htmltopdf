<?php
/**
 * Created by PhpStorm.
 * User: nomantufail
 * Date: 26/01/2017
 * Time: 4:28 PM
 */
require 'vendor/autoload.php';

use mikehaertl\wkhtmlto\Pdf;

// You can pass a filename, a HTML string, an URL or an options array to the constructor
$pdf = new Pdf('page.html');

// On some systems you may have to set the path to the wkhtmltopdf executable
// $pdf->binary = 'C:\...';

if (!$pdf->saveAs('page.pdf')) {
    echo $pdf->getError();
}