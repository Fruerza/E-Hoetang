<?php
$activePage = isset($_GET['page']) ? $_GET['page'] : 'ppinjaman';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Hoetang</title>
    <link rel="stylesheet" type="text/css" href="user.css">
    <style>
        .content-section {
            display: none;
            opacity: 0;
            transform: translateX(100%);
            transition: opacity 1.2s ease-in-out, transform 1.2s ease-in-out;
        }
        .content-section.active {
            display: block;
            opacity: 1;
            transform: translateX(0);
        }
        .content-section.fade-out {
            opacity: 0;
            transform: translateX(-100%);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img class="e-hoetang-1" src="../img/E-Hoetang 1.png" />
                <div class="e-hoetang">E-Hoetang</div>
            </div>
            <nav>
                <ul>
                    <li><a href="?page=ppinjaman" class="<?php echo $activePage == 'ppinjaman' ? 'active' : ''; ?>"><img src="../img/currency_exchange.svg" class="icon" alt="Ajukan Peminjaman Icon"> Ajukan Peminjaman</a></li>
                    <li><a href="?page=list-hutang" class="<?php echo $activePage == 'list-hutang' ? 'active' : ''; ?>"><img src="../img/checkbook.png" alt="List Hutang Icon"> List Hutang</a></li>
                    <li><a href="?page=pembayaran" class="<?php echo $activePage == 'pembayaran' ? 'active' : ''; ?>"><img src="../img/payments.png" alt="Pembayaran Icon"> Pembayaran</a></li>
                    <li><a href="?page=akun" class="<?php echo $activePage == 'akun' ? 'active' : ''; ?>"><img src="../img/settings_account_box.png" alt="Akun Icon"> Akun</a></li>
                </ul>
            </nav>
            <div class="logout">
                <a href="#logout"><img src="../img/move_item.png" alt="Logout Icon">Log Out</a>
            </div>
        </div>
        <div class="main-content">
            <div class="header">
                <div class="welcome">
                </div>
            </div>
            <div class="content">
                <div id="ppinjaman" class="content-section <?php echo $activePage == 'ppinjaman' ? 'active' : ''; ?>">
                    <div class="illustration">
                        <img src="../img/Illustration.png" alt="Illustration">
                    </div>
                    <div class="text-content">
                        <h2>Pinjaman Mudah dan Cepat Hanya di E-Hoetang</h2>
                        <p>Memberdayakan Mimpi Anda, Satu Pinjaman pada Satu Waktu</p>
                        <div class="apply-button">
                            <a href="Ppinjaman2.php">Ajukan Peminjaman</a>
                        </div>
                    </div>
                </div>
                <div id="list-hutang" class="content-section <?php echo $activePage == 'list-hutang' ? 'active' : ''; ?>">
                    <?php include 'Lpinjaman.php'; ?>
                </div>
                <div id="pembayaran" class="content-section <?php echo $activePage == 'pembayaran' ? 'active' : ''; ?>">
                    <?php include 'Tpinjaman.php'; ?>
                </div>
                <div id="akun" class="content-section <?php echo $activePage == 'akun' ? 'active' : ''; ?>">
                    <?php include 'Apinjaman.php'; ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.sidebar nav ul li a').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const targetPage = link.getAttribute('href').split('page=')[1];
                const currentSection = document.querySelector('.content-section.active');
                const targetSection = document.getElementById(targetPage);

                if (currentSection !== targetSection) {
                    currentSection.classList.remove('active');
                    currentSection.classList.add('fade-out');
                    setTimeout(() => {
                        currentSection.classList.remove('fade-out');
                        currentSection.style.display = 'none';
                        targetSection.style.display = 'block';
                        setTimeout(() => {
                            targetSection.classList.add('active');
                        }, 20);
                    }, 500);
                }
            });
        });
    </script>
</body>
</html>
