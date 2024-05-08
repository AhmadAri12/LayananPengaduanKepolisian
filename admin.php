<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Dashboard Pengaduan Kepolisian </title>
    <link rel="stylesheet" href="css/style_admin.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="assets/gambar/logo.png" alt="Pengaduan" class="logo" />
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="History/history.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">History Pengaduan</span>
                </a>
            </li>
            <li>
                <a href="Categories/categories.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Categories Pengaduan</span>
                </a>
            </li>
            <li class="log_out">
                <a href="index.php" onclick="return confirm('Anda yakin ingin keluar?');">
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
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="profile-details">
                <i class='bx bxs-user'></i>
                <span class="admin_name">Administrator</span>
            </div>
        </nav>
        <div class="home-content">
            <div class="overview-boxes">
                <h2>Selamat Datang Administrator!</h2>
            </div>
        </div>
    </div>
</body>

</html>