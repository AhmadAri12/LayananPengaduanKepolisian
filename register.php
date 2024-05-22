<?php
include 'koneksi.php';

$query = "SELECT id_role, nama_role FROM tb_role";
$result = mysqli_query($koneksi, $query);
?>
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
                <div class="form-login">
                <form action="register-proses.php" method="POST">
                    <div>
                        <label for="email-name" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div><br>
                    <div>
                        <label for="username-name" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div><br>
                    <div>
                        <label for="password-name" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div><br>
                    <div>
                        <label for="role_name" class="form-label">Role</label>
                        <select class="form-control" id="role_name" name="role_name" required>
                            <option value="">Pilih Role</option>
                            <?php
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<option value='" . $row['id_role'] . "'>" . $row['nama_role'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="register" id="register">Register</button>
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
</body>

</html>
