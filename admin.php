<?php
session_start(); 

if (!isset($_SESSION['username'])) { 
    header('location:login.php'); 
    exit();
}
$koneksiFile = 'koneksi.php';
if (!file_exists($koneksiFile)) {
    die("Error: File 'koneksi.php' not found.");
}
include($koneksiFile);
if (!$koneksi) {
    die("Error: Database connection failed.");
}
$result_pengaduan = mysqli_query($koneksi, "SELECT COUNT(*) AS count_pengaduan FROM tb_pengaduan");
if (!$result_pengaduan) {
    die("Error: Failed to execute query for pengaduan count.");
}
$count_pengaduan = mysqli_fetch_assoc($result_pengaduan)['count_pengaduan'];

$result_jenis_pengaduan = mysqli_query($koneksi, "SELECT COUNT(*) AS count_jenis_pengaduan FROM tb_jenis_pengaduan");
if (!$result_jenis_pengaduan) {
    die("Error: Failed to execute query for jenis pengaduan count.");
}
$count_jenis_pengaduan = mysqli_fetch_assoc($result_jenis_pengaduan)['count_jenis_pengaduan'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pengaduan Kepolisian</title>
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
                <a href="logout.php">
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
                <span class="admin_name"><?php echo $_SESSION['username']; ?></span>
            </div>
        </nav>
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="box-content">
                        <h2 id="text"><?php echo $_SESSION['username']; ?></h2>
                        <h3 id="date"></h3>
                    </div>
                </div>
                <div class="cardBox">
                <!-- Card for Total History Pengaduan -->
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $count_pengaduan; ?></div>
                        <div class="cardName">Total History Pengaduan</div>
                    </div>
                    <div class="iconBx">
                        <i class='bx bx-history'></i>
                    </div>
                </div>
                <!-- Card for Total Categories Pengaduan -->
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $count_jenis_pengaduan; ?></div>
                        <div class="cardName">Total Categories Pengaduan</div>
                    </div>
                    <div class="iconBx">
                        <i class='bx bx-category'></i>
                    </div>
                </div>
            </div>
            <style>
            .cardBox {
                position: relative;
                width: 100%;
                padding: 20px;
                display: grid;
                grid-template-columns: repeat(2, 1fr); /* Adjusted to 2 columns */
                grid-gap: 50px;
            }
            .cardBox .card {
                position: relative;
                padding: 20px;
                border-radius: 20px;
                display: flex;
                justify-content: space-between;
                cursor: pointer;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.20);
            }
            .cardBox .card .numbers {
                position: relative;
                font-weight: 500;
                font-size: 2.5rem;
            }
            .cardBox .card .cardName {
                font-size: 1.3rem;
                margin-top: 5px;
            }
            .cardBox .card .iconBx {
                font-size: 4.5rem;
                color: darkslateblue;
            }
            .cardBox .card:hover {
                background: #c7c0e9;
            }
            </style>
            </div>
        </div>
    </div>
</body>
<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    };

    function myFunction() {
        const months = ["Januari", "Februari", "Maret", "April", "Mei",
            "Juni", "Juli", "Agustus", "September",
            "Oktober", "November", "Desember"
        ];
        const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis",
            "Jumat", "Sabtu"
        ];
        let date = new Date();
        let jam = date.getHours();
        let tanggal = date.getDate();
        let hari = days[date.getDay()];
        let bulan = months[date.getMonth()];
        let tahun = date.getFullYear();
        let m = date.getMinutes();
        let s = date.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
        requestAnimationFrame(myFunction);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    window.onload = function() {
        let date = new Date();
        let jam = date.getHours();
        if (jam >= 4 && jam <= 10) {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Pagi, ");
        } else if (jam >= 11 && jam <= 14) {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Siang, ");
        } else if (jam >= 15 && jam <= 18) {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Sore, ");
        } else {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Malam, ");
        }
        myFunction();
    };
</script>
</html>
