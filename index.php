<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Kepolisian</title>
    <link rel="stylesheet" href="css/homepage.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f3f15ac6f4.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- BEGIN: Navbar -->
    <nav>
        <input type="checkbox" id="check"><label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="logo-container">
            <img src="assets/gambar/logo.png" alt="Logo Pengaduan" width="60%" class="logo" />
        </div>
        <ul>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Info Satgas</a></li>
            <li><a href="#">Info Data</a></li>
            <li><a class="active" href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    <section>
        <div class="container-slider">
            <div class="img-slider">
                <div class="slide active">
                    <img src="assets/gambar/slider/1.png" alt="slider 1">
                </div>
                <div class="slide">
                    <img src="assets/gambar/slider/2.png" alt="slider 2">
                </div>
                <div class="slide">
                    <img src="assets/gambar/slider/3.png" alt="slider 3">
                </div>
                <div class="slide">
                    <img src="assets/gambar/slider/4.png" alt="slider 4">
                </div>
                <div class="slide">
                    <img src="assets/gambar/slider/5.png" alt="slider 5">
                </div>
                <div class="navigation">
                    <div class="btn active"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                </div>
            </div>
        </div>
        <!-- END: Carousel -->
        <!-- END: Navbar -->
        <div class="col-md-8 col-md-offset-2 mg-b-40">
            <h2 class="form-title">Pengaduan Online</h2><br>
            <div class="form-container">
                <form action="#" method="post" class="styled-form">
                    <label for="fullname">Nama Lengkap:</label>
                    <input type="text" id="fullname" name="fullname" required placeholder="Masukkan nama lengkap Anda"><br>
                    <label for="address">Alamat:</label>
                    <input type="text" id="address" name="address" required placeholder="Masukkan alamat Anda"><br>
                    <label for="phone">Nomor HP/Telepon:</label>
                    <input type="tel" id="phone" name="phone" required placeholder="Masukkan nomor telepon Anda"><br>
                    <label for="email">Alamat email:</label>
                    <input type="email" id="email" name="email" required placeholder="Masukkan alamat email Anda"><br>
                    <label for="tKP">TKP:</label>
                    <select id="tKP" name="tKP" required>
                        <option value="">-- Silakan pilih salah satu opsi --</option>
                        <option value="BANGKALAN">BANGKALAN</option>
                        <option value="BANYUWANGI">BANYUWANGI</option>
                        <option value="BATU">BATU</option>
                        <option value="BLITAR">BLITAR</option>
                        <option value="BLITAR KOTA">BLITAR KOTA</option>
                        <option value="MALANG">MALANG</option>
                        <option value="MALANG KOTA">MALANG KOTA</option>
                        <option value="LUMAJANG">LUMAJANG</option>
                        <option value="LAMONGAN">LAMONGAN</option>
                        <option value="KEDIRI">KEDIRI</option>
                    </select><br>
                    <label for="kasus">Kasus:</label>
                    <select id="kasus" name="kasus" required>
                    <option value="">-- Silakan pilih salah satu opsi --</option>
                    <option value="ASURANSI">ASURANSI</option>
                    <option value="DAMPAK LIMBAH">DAMPAK LIMBAH</option>
                    <option value="DUGAAN KORUPSI">DUGAAN KORUPSI</option>
                    <option value="HAK CIPTA">HAK CIPTA</option>
                    <option value="IJAZAH PALSU">IJAZAH PALSU</option>
                    <option value="JUDI ONLIN">JUDI ONLINE</option>
                    <option value="PENIPUAN ONLINE">PENIPUAN ONLINE</option>
                    <option value="PINJAMAN ONLINE">PINJAMAN ONLINE</option>
                    <option value="LAIN-LAIN">LAIN-LAIN</option>
                </select><br>
                    <label for="terlapor">Terlapor:</label>
                    <input type="text" id="terlapor" name="terlapor" required placeholder="Masukkan nama terlapor"><br>
                    <label for="description">Isi Pengaduan:</label>
                    <textarea id="description" name="description" required placeholder="Masukkan isi pengaduan Anda"></textarea><br>
                    <label for="file" id="files">Choose File:</label>
                    <input type="file" id="file" name="file" accept="image/*"><br>
                    <button type="button" value="Submit Pengaduan" class="submit-button" onclick="submitForm()">Submit Pengaduan</button>
                </form>
            </div>
        </div>
        <br><br>
    </section>
    <br><br>
    <footer class="footer">
        <div class="row">
            <p>Copyright &copy; 2024 Pengaduan Kepolisian</p>
        </div>
    </footer>
    <script>
        // DOMContentLoaded event ensures that the script runs after the entire DOM has been loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Selecting elements from the DOM
            const navbar = document.querySelector('nav');
            const slider = document.querySelector('.container-slider');
            const formTitle = document.querySelector('.form-title');
            const formContainer = document.querySelector('.form-container');
            const footer = document.querySelector('.footer');

            // Applying styles to the selected elements
            navbar.style.backgroundColor = '#333';
            slider.style.margin = '20px auto';
            formTitle.style.textAlign = 'center';
            formContainer.style.padding = '20px';
            footer.style.backgroundColor = '#333';
            footer.style.color = '#fff';
            footer.style.textAlign = 'center';
        });
        var slides = document.querySelectorAll('.slide');
        var btns = document.querySelectorAll('.btn');
        let currentSlide = 1;

        // Javascript for image slider manual navigation
        var manualNav = function(manual) {
            slides.forEach((slide) => {
                slide.classList.remove('active');

                btns.forEach((btn) => {
                    btn.classList.remove('active');
                });
            });

            slides[manual].classList.add('active');
            btns[manual].classList.add('active');
        }

        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                manualNav(i);
                currentSlide = i;
            });
        });

        // Javascript for image slider autoplay navigation
        var repeat = function(activeClass) {
            let active = document.getElementsByClassName('active');
            let i = 1;

            var repeater = () => {
                setTimeout(function() {
                    [...active].forEach((activeSlide) => {
                        activeSlide.classList.remove('active');
                    });

                    slides[i].classList.add('active');
                    btns[i].classList.add('active');
                    i++;

                    if (slides.length == i) {
                        i = 0;
                    }
                    if (i >= slides.length) {
                        return;
                    }
                    repeater();
                }, 10000);
            }
            repeater();
        }
        repeat();

        function submitForm() {
            // Get form data
            const fullname = document.getElementById('fullname').value;
            const address = document.getElementById('address').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;
            const tKP = document.getElementById('tKP').value;
            const kasus = document.getElementById('kasus').value;
            const terlapor = document.getElementById('terlapor').value;
            const description = document.getElementById('description').value;
            const file = document.getElementById('file').value;

            // Perform form validation
            if (fullname === '' || address === '' || phone === '' || email === '' || tKP === '' || kasus === '' || terlapor === '' || description === '') {
                alert('tolong isi semua data terlebih dahulu!');
                return;
            }
            if (fullname !== '' && address !== '' && phone !== '' && email !== '' && tKP !== '' && kasus !== '' && terlapor !== '' && description !== '') {
                alert('Pengaduan Anda telah berhasil dikirim!');
            }
        }
    </script>
</body>

</html>