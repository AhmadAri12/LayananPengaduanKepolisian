<?php
include '../koneksi.php';
session_start();

if(!isset($_SESSION['username'])) {
    header('location:../login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Admin Pengaduan Kepolisian | Entry History</title>
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
                    <a href="../History/history.php" class="active">
                        <i class='bx bx-box'></i>
                        <span class="links_name">History Pengaduan</span>
                    </a>
                </li>
                <li>
                    <a href="categories.php">
                        <i class='bx bx-list-ul'></i>
                        <span class="links_name">Categories Pengaduan</span>
                    </a>
                </li>
                <li class="log_out">
                    <a href="../logout.php">
                        <i class='bx bx-log-out'></i>
                        <span class="links_name">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
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
            <h3>Tambah History Pengaduan</h3>
            <div class="form-login">
                <form action="history-proses.php" method="post" enctype="multipart/form-data">
                    <label for="nama_pelapor">Nama Pelapor</label>
                    <input class="input" type="text" name="nama_pelapor" id="nama_pelapor" placeholder="Nama Pelapor" required />
                    <label for="telp_pelapor">Telepon Pelapor</label>
                    <input class="input" type="tel" name="telp_pelapor" id="telp_pelapor" placeholder="Telepon Pelapor" required />
                    <label for="kasus">Kasus</label>
                    <select class="input" name="id_kasus" id="kasus" required>
                        <option value="">Pilih Kasus</option>
                        <?php
                            $sql = "SELECT id_kasus, nama_kasus FROM tb_jenis_pengaduan";
                            $result = mysqli_query($koneksi, $sql);
                            while ($data = mysqli_fetch_assoc($result)) {
                                echo "<option value='{$data['id_kasus']}'>{$data['nama_kasus']}</option>";
                            }
                        ?>
                    </select>
                    <label for="tersangka">Tersangka</label>
                    <input class="input" type="text" name="tersangka" id="tersangka" placeholder="Nama Tersangka" required />
                    <label for="isi_pengaduan">Isi Pengaduan</label>
                    <textarea class="input" name="isi_pengaduan" id="isi_pengaduan" placeholder="Isi Pengaduan" required></textarea>
                    <label for="tgl_kejadian">Tanggal Kejadian</label>
                    <input class="input" type="date" name="tgl_kejadian" id="tgl_kejadian" required />
                    <button type="submit" class="btn" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
