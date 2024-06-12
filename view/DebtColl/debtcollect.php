<?php
$activePage = isset($_GET['page']) ? $_GET['page'] : 'debtcollect';
?>
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
                    <li><a href="?page=debtcollect" class="<?php echo $activePage == 'debtcollect' ? 'active' : ''; ?>"><img src="../img/eye_tracking.png" class="icon" alt="Ajukan Peminjaman Icon">Target Sasaran</a></li>
                    <li><a href="?page=biodata" class="<?php echo $activePage == 'biodata' ? 'active' : ''; ?>"><img src="../img/settings_account_box.png" alt="List Hutang Icon"> Akun</a></li>
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
            <div id="debtcollect" class="content-section <?php echo $activePage == 'debtcollect' ? 'active' : ''; ?>">
                <h2>List Target Bulan Ini</h2>
                <div class="penghutang-list">
                    <div class="penghutang-item">
                        <input type="file" id="profile-img1" class="profile-input" accept="image/*">
                        <div class="details">
                            <p><strong>Nama:</strong> Budhe Sumiyati</p>
                            <p><strong>Alamat:</strong> Jl. Kalimantan V, Kel. Sumbersari, Sumbersari Jember Jawa Timur</p>
                            <p><strong>Jumlah Pinjaman:</strong> Rp. 5.000.000,00</p>
                            <p><strong>Tenggat Pinjaman:</strong> 23 Juli 2024</p>
                        </div>
                        <div class="credit-score">
                            <div class="kredit">Kredit Score</div>
                            <div class="score">70%</div>
                            <button class="status-button">Tagih Sekarang</button>
                        </div>
                    </div>
                    <div class="penghutang-item">
                        <input type="file" id="profile-img2" class="profile-input" accept="image/*">
                        <div class="details">
                            <p><strong>Nama:</strong> Budhe Sumiyati</p>
                            <p><strong>Alamat:</strong> Jl. Kalimantan V, Kel. Sumbersari, Sumbersari Jember Jawa Timur</p>
                            <p><strong>Jumlah Pinjaman:</strong> Rp. 5.000.000,00</p>
                            <p><strong>Tenggat Pinjaman:</strong> 23 Juli 2024</p>
                        </div>
                        <div class="credit-score">
                            <div class="kredit">Kredit Score</div>
                            <div class="score">40%</div>
                            <button class="status-button">Tagih Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="biodata" class="content-section <?php echo $activePage == 'biodata' ? 'active' : ''; ?>">
                <?php include 'biodata.php'; ?>
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
