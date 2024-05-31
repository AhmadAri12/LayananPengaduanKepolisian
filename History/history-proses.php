<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $nama_pelapor = $_POST['nama_pelapor'];
    $telp_pelapor = $_POST['telp_pelapor'];
    $id_kasus = $_POST['id_kasus'];  // This is the selected ID from the dropdown
    $tersangka = $_POST['tersangka'];
    $isi_pengaduan = $_POST['isi_pengaduan'];
    $tgl_kejadian = $_POST['tgl_kejadian'];
    
    $sql = "INSERT INTO tb_pengaduan (nama_pelapor, telp_pelapor, id_kasus, tersangka, isi_pengaduan, tgl_kejadian) 
            VALUES ('$nama_pelapor', '$telp_pelapor', '$id_kasus', '$tersangka', '$isi_pengaduan', '$tgl_kejadian')";

    if(empty($nama_pelapor) || empty($telp_pelapor) || empty($id_kasus) || empty($tersangka) || empty($isi_pengaduan) || empty($tgl_kejadian)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'history-entry.php';
            </script>
        ";
    } elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data History Pengaduan Berhasil Ditambahkan');
                window.location = 'history.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'history-entry.php';
            </script>
        ";
    }
} elseif(isset($_POST['edit'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $nama_pelapor = $_POST['nama_pelapor'];
    $telp_pelapor = $_POST['telp_pelapor'];
    $id_kasus = $_POST['id_kasus'];  // This is the selected ID from the dropdown
    $tersangka = $_POST['tersangka'];
    $isi_pengaduan = $_POST['isi_pengaduan'];
    $tgl_kejadian = $_POST['tgl_kejadian'];

    if(empty($id_pengaduan) || empty($nama_pelapor) || empty($telp_pelapor) || empty($id_kasus) || empty($tersangka) || empty($isi_pengaduan) || empty($tgl_kejadian)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'history-edit.php?id_pengaduan=$id_pengaduan';
            </script>
        ";
        exit;
    }

    $sql = "UPDATE tb_pengaduan SET
            nama_pelapor = '$nama_pelapor',
            telp_pelapor = '$telp_pelapor',
            id_kasus = '$id_kasus',
            tersangka = '$tersangka',
            isi_pengaduan = '$isi_pengaduan',
            tgl_kejadian = '$tgl_kejadian'
            WHERE id_pengaduan = '$id_pengaduan'";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data History Pengaduan Berhasil Diubah');
                window.location = 'history.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'history-edit.php?id_pengaduan=$id_pengaduan';
            </script>
        ";
    }
} elseif(isset($_POST['hapus'])) {
    $id_pengaduan = $_POST['id_pengaduan'];

    $sql = "DELETE FROM tb_pengaduan WHERE id_pengaduan = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id_pengaduan);

    if ($stmt->execute()) {
        echo "
            <script>
                alert('Data History Pengaduan Berhasil Dihapus');
                window.location = 'history.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data History Pengaduan Gagal Dihapus');
                window.location = 'history.php';
            </script>
        ";
    }

    $stmt->close();
} else if (isset($_POST['tidak'])) {
    header('location: history.php');
} else {
    header('location: history.php');
}
?>
