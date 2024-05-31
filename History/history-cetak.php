<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();

// Fetch data from the database
$query = mysqli_query($koneksi, "SELECT tb_pengaduan.*, tb_jenis_pengaduan.nama_kasus FROM tb_pengaduan JOIN tb_jenis_pengaduan ON tb_pengaduan.id_kasus = tb_jenis_pengaduan.id_kasus");

if (!$query) {
    die('Error: ' . mysqli_error($koneksi));
}

// Start HTML
$html = '<html><head><style>
            table { width: 100%; border-collapse: collapse; }
            th, td { padding: 8px 12px; border: 1px solid #000; }
            th { background-color: #f2f2f2; }
         </style></head><body>';
$html .= '<center><h3>Data History Pengaduan</h3></center><hr/><br>';
$html .= '<table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelapor</th>
                    <th>Nomor Telepon</th>
                    <th>Kasus</th>
                    <th>Tersangka</th>
                    <th>Pengaduan</th>
                    <th>Tanggal Kejadian</th>
                </tr>
            </thead>
            <tbody>';

$no = 1;
while ($history = mysqli_fetch_assoc($query)) {
    $html .= "<tr>
                <td>{$no}</td>
                <td>{$history['nama_pelapor']}</td>
                <td>{$history['telp_pelapor']}</td>
                <td>{$history['nama_kasus']}</td>
                <td>{$history['tersangka']}</td>
                <td>{$history['isi_pengaduan']}</td>
                <td>{$history['tgl_kejadian']}</td>
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
$dompdf->stream('laporan-history-pengaduan.pdf', array("Attachment" => false));
?>
