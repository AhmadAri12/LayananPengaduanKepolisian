<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Admin Pengaduan Kepolisian | History Entry</title>
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
                <a href="../index.php">
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
                <span class="admin_name">Administrator</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Input History Pengaduan</h3>
            <div class="form-login">
                <form action="history.php">
                    <label for="nama_pelapor">Nama Pelapor</label>
                    <input class="input" type="text" name="nama_pelapor" id="nama_pelapor" placeholder="Nama Pelapor" />
                    <label for="nomor_telepon">Nomor Telepon Pelapor</label>
                    <input class="input" type="tel" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telepon" />
                    <label for="kasus">Kasus</label>
                    <textarea class="input" name="kasus" id="kasus" placeholder="Deskripsi Kasus"></textarea>
                    <label for="tersangka">Tersangka</label>
                    <input class="input" type="text" name="tersangka" id="tersangka" placeholder="Nama Tersangka" style="margin-bottom: 20px" />
                    <label for="isi_pengaduan">Isi Pengaduan</label>
                    <textarea class="input" name="isi_pengaduan" id="isi_pengaduan" placeholder="Isi Pengaduan" style="margin-bottom: 20px"></textarea>
                    <label for="tanggal_kejadian">Tanggal Kejadian</label>
                    <input class="input" type="date" name="tanggal_kejadian" id="tanggal_kejadian" placeholder="Tanggal Kejadian" style="margin-bottom: 20px" />
                    <button type="submit" class="btn btn-simpan" name="simpan"> Simpan </button>
                </form>
            </div>
        </div>
</body>

</html>