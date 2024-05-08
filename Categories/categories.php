<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Admin Pengaduan Kepolisian | Categories</title>
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
                <a href="../History/history.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">History Pengaduan</span>
                </a>
            </li>
            <li>
                <a href="categories.php" class="active">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Categories Pengaduan</span>
                </a>
            </li>
            <li class="log_out">
                <a href="../index.php" onclick="return confirm('Are you sure you want to log out?');">
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
            <h3>Categories Pengaduan</h3>
            <button type="button" class="btn btn-tambah">
		   <a href="categories-entry.php">Tambah Data</a>
		</button>
            <table class="table-data">
                <thead>
                    <tr>
                        <th style="width: 13%">Kategori Pengaduan</th>
                        <th style="width: 60%">Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kriminalitas</td>
                        <td>Meliputi pencurian, perampokan, penyerangan, dll</td>
                        <td>
                            <button type="button" class="btn btn-edit">
            <a href="#">Edit</a>
          </button>
                            <button type="button" class="btn btn-delete">
            <a href="#">Hapus</a>
          </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>