<?php ob_get_clean(); ?>
<?php $title = 'E-HOETANG'; ?>
<?php $style = 'style.css'; ?>
<?php $body = ob_get_clean(); ?>
<?php include 'master.php'; ?>
<?php include 'header.php';
?>
<body>
<header class="header">
        <div class="container">
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
                        <button class="mulai"><a href="<?= urlpath('register'); ?>">Mulai</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>









    <?php
    include 'section.php';
    include 'testimoni1.php';
    ?>

<footer class="footer">
    <div class="left">
        <img src="view/img/E-Hoetang 1.png" alt="E-Hoetang Logo">
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

<script src="view/javascript/sectionview.js"></script>
</body>
</html>