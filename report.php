<?php 

require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->load_html('Memggunakan DOMpdf untuk Membuat Report PDF denga DOMPDF');

$dompdf->setPaper('A4','landscape');

$dompdf->render();

$dompdf->stream('hasil_report.pdf');

?>