<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $nama_kasus = $_POST['nama_kasus'];
    $deskripsi = $_POST['deskripsi'];
    
    var_dump($nama_kasus, $deskripsi);

    $sql = "INSERT INTO tb_jenis_pengaduan (nama_kasus, deskripsi) VALUES('$nama_kasus', '$deskripsi')";

    if(empty($nama_kasus) || empty($deskripsi)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'categories-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Pengaduan Berhasil Ditambahkan');
                window.location = 'categories.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'categories-entry.php'
            </script>
        ";
    }
}if(isset($_POST['edit'])) {
    $id_kasus = $_POST['id_kasus'];
    $nama_kasus = $_POST['nama_kasus'];
    $deskripsi = $_POST['deskripsi'];

    if(empty($id_kasus) || empty($nama_kasus) || empty($deskripsi)) {
        echo "
            <script>
                alert('ID Kasus, Nama Kasus, atau Deskripsi tidak boleh kosong');
                window.location = 'categories-edit.php?id_kasus=$id_kasus';
            </script>
        ";
        exit;
    }

    $sql = "UPDATE tb_jenis_pengaduan SET
            nama_kasus = '$nama_kasus',
            deskripsi = '$deskripsi'
            WHERE id_kasus = '$id_kasus'";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Pengaduan Berhasil Diubah');
                window.location = 'categories.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'categories-edit.php?id_kasus=$id_kasus';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id_kasus = $_POST['id_kasus'];

    $sql = "DELETE FROM tb_jenis_pengaduan WHERE id_kasus = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id_kasus);

    if($stmt->execute()) {
        echo "
            <script>
                alert('Data Categories Pengaduan Berhasil Dihapus');
                window.location = 'categories.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Categories Pengaduan Gagal Dihapus');
                window.location = 'categories.php';
            </script>
        ";
    }

    $stmt->close();
} else {
    header('location: categories.php');
}