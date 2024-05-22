<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengaduan Kepolisian</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo-container">
            <img src="assets/gambar/logo.png" alt="Logo Pengaduan" width="60%" class="logo" />
        </div>
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="index.php">Layanan</a></li>
            <li><a href="#">Info Satgas</a></li>
            <li><a href="#">Info Data</a></li>
            <li><a class="active" href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    <main>
        <div class="container-card">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Login Pengaduan</h3>
                </div>
                <div class="form-login">
                <form action="login-proses.php" method="post">
                    <div class="form-group">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
                </div>
                <div class="card-footer">
                    <p>Belum punya akun? <a href="register.php" class="link-register">Daftar Sekarang</a></p>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <p>Copyright &copy; 2024 Pengaduan Kepolisian</p>
            </div>
        </div>
    </footer>
</body>
</html>
