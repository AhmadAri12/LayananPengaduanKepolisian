<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Pengaduan Kepolisian | History</title>
    <link rel="stylesheet" href="../css/style_admin.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="../assets/gambar/logo.png" alt="Logo Pengaduan" class="logo" />
        </div>
        <ul class="nav-links">
            <li>
                <a href="../admin.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="history.php" class="active">
                    <i class='bx bx-box'></i>
                    <span class="links_name">History Pengaduan</span>
                </a>
            </li>
            <li>
                <a href="../Categories/categories.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Categories Pengaduan</span>
                </a>
            </li>
            <li class="log_out">
                <a href="../logout.php" onclick="return confirm('Are you sure you want to log out?');">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
            </div>
            <div class="profile-details">
                <i class='bx bxs-user'></i>
                <span class="admin_name"><?php echo $_SESSION['username']; ?></span>
            </div>
        </nav>
        <div class="home-content">
            <h3>History Pengaduan</h3>
            <button type="button" class="btn btn-tambah">
               <a href="history-entry.php">Tambah Data</a>
           </button>
           <button class="btn btn-tambah"  style="margin: 10px 0px 10px 0px;:" >
                <a href="history-cetak.php">Cetak Data</a>
			</button>
            <table class="table-data">
                <thead>
                    <tr>
                        <th scope="col" style="width: 20%">Nama Pelapor</th>
                        <th scope="col" style="width: 20%">Nomor Telepon Pelapor</th>
                        <th scope="col" style="width: 20%">Kasus</th>
                        <th scope="col" style="width: 20%">Tersangka</th>
                        <th scope="col" style="width: 20%">Isi Pengaduan</th>
                        <th scope="col" style="width: 20%">Tanggal Kejadian</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include '../koneksi.php';
                    $sql = "SELECT tp.*, tj.nama_kasus 
                            FROM tb_pengaduan tp
                            JOIN tb_jenis_pengaduan tj ON tp.id_kasus = tj.id_kasus";
                    $result = mysqli_query($koneksi, $sql);

                    if (mysqli_num_rows($result) == 0) {
                        echo "
                            <tr>
                                <td colspan='7' align='center'>
                                    Data Kosong
                                </td>
                            </tr>
                        ";
                    } else {
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "
                            <tr>
                                <td>{$data['nama_pelapor']}</td>
                                <td>{$data['telp_pelapor']}</td>
                                <td>{$data['nama_kasus']}</td>
                                <td>{$data['tersangka']}</td>
                                <td>{$data['isi_pengaduan']}</td>
                                <td>{$data['tgl_kejadian']}</td>
                                <td>
                                    <button type='button' class='btn btn-edit btn-space'>
                                        <a href='history-edit.php?id_pengaduan={$data['id_pengaduan']}'>Edit</a>
                                    </button>
                                    <button type='button' class='btn btn-delete'>
                                        <a href='history-hapus.php?id_pengaduan={$data['id_pengaduan']}'>Hapus</a>
                                    </button>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
