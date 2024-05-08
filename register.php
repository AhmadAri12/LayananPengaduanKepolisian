<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Pengaduan Kepolisian</title>
    <link rel="stylesheet" href="css/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <input type="checkbox" id="check"><label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="logo-container">
            <img src="assets/gambar/logo.png" alt="Logo Pengaduan" width="60%" class="logo" />
        </div>
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
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <form action="login.php">
                        <div class="">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div><br>
                        <div class="">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div><br>
                        <div class="">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div><br>
                        <div class="">
                            <label for="konfirmasiPassword" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="konfirmasiPassword" name="konfirmasiPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="RegisterForm()">Register</button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <p>Sudah punya akun? <a href="login.php">Login Sekarang</a></p>
                </div>
                </form>
            </div>
        </div>
        </div>
    </main>
    <br><br>
    <footer class="footer">
        <div class="row">
            <p>Copyright &copy; 2024 Pengaduan Kepolisian</p>
        </div>
    </footer>
    <script>
        function RegisterForm() {
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var konfirmasiPassword = document.getElementById("konfirmasiPassword").value;

            if (username === "" || email === "" || password === "" || konfirmasiPassword === "") {
                alert("Isi semua data terlebih dahulu.");
                return false;
            }

            if (password !== konfirmasiPassword) {
                alert("Password dan konfirmasi password harus sama.");
                return false;
            }

            alert("Register berhasil! Silahkan login.");

            return true;
        }
    </script>
</body>

</html>