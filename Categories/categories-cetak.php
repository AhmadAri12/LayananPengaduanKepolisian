<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$query = mysqli_query($koneksi, "SELECT * FROM tb_jenis_pengaduan");
$html = '<html><head><style>
            table { width: 100%; border-collapse: collapse; }
            th, td { padding: 8px 12px; border: 1px solid #000; }
            th { background-color: #f2f2f2; }
         </style></head><body>';
$html .= '<center><h3>Data Kategori Pengaduan</h3></center><hr/><br>';
$html .= '<table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori Pengaduan</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>';

$no = 1;
while ($categories = mysqli_fetch_assoc($query)) {
    $html .= "<tr>
                <td>{$no}</td>
                <td>{$categories['nama_kasus']}</td>
                <td>{$categories['deskripsi']}</td>
              </tr>";
    $no++;
}

$html .= '</tbody></table>';
$html .= '</body></html>';

// Load HTML into Dompdf
$dompdf->loadHtml($html);

// Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('laporan-kategori-pengaduan.pdf', array("Attachment" => false));
?>
