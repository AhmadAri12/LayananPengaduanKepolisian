<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../login.php');
    exit();
}

include '../koneksi.php';

if (!isset($_GET['id_pengaduan'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'history.php';
      </script>
    ";
    exit();
}

$id_pengaduan = $_GET['id_pengaduan'];

$sql = "SELECT * FROM tb_pengaduan WHERE id_pengaduan = ?";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("i", $id_pengaduan);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Admin Pengaduan Kepolisian | History</title>
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
                <a href="../categories/categories.php">
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
            <h3>Hapus History Pengaduan</h3>
            <div class="form-login">
                <h4>Ingin Menghapus Data ?</h4>
                <form action="history-proses.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_pengaduan" value="<?= $data['id_pengaduan'] ?>">
                    <button type="submit" class="btn" name="hapus" style="margin-top: 50px;">
                        Yes
                    </button>
                    <button type="submit" class="btn" name="tidak">
                        No
                    </button>
                </form>
            </div>
        </div>
</body>
</html>
