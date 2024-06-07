
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Hoetang</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/E-Hoetang 1.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
              <img src="img/E-Hoetang 1.png" alt="" class="logo-image">
              <span class="logo-text">E-Hoetang</span>
            </div>
            <div class="display-text">
                <div class="sub-content">
                  <div class="bersama-menuju-kesuksesan-finansial">
                    Bersama Menuju Kesuksesan Finansial
                  </div>
                  <div class="layanan-peminjaman-mudah-untuk-segala-kebutuhan-anda">
                    Layanan Peminjaman Mudah untuk Segala Kebutuhan Anda
                  </div>
                </div>
                <div class="button">
                    <div class="button2">
                        <button class="mulai"><a href="view_homepage/register.php">Mulai</button></a>
                    </div>
                </div>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#testimoni">Testimoni</a></li>
                </ul>
            </nav>
            <button type="bttn"><a href="view_homepage/login.php">Sign In</button></a>

        </div>
    </header>


    <?php
    include 'view_homepage/section.php';
    include 'view_homepage/testimoni1.php';
    ?>

<footer class="footer">
    <div class="left">
        <img src="img/E-Hoetang 1.png" alt="E-Hoetang Logo">
        <div>
            <div style="font-size: 18px; font-weight: bold; color: #0000ee;">E-Hoetang</div>
            <div style="font-size: 12px;">© 2024 Dibuat dengan Cinta dan Perjuangan - Faris Titik Kumpul</div>
        </div>
    </div>
    <div class="right">
        <div class="social-media">
        <a href="https://www.facebook.com"><img src="https://img.icons8.com/fluency/48/000000/facebook-new.png" alt="Facebook"></a>
            <a href="https://www.instagram.com"><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" alt="Instagram"></a>
            <a href="https://www.twitter.com"><img src="https://img.icons8.com/fluency/48/000000/twitter.png" alt="Twitter"></a>
        </div>
    </div>
</footer>

<script src="javascript/sectionview.js"></script>
</body>
</html>




