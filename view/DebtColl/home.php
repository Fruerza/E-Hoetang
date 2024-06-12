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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            width: 100%;
        }

        .sidebar {
            width: 250px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .logo {
            display: flex;
            flex-direction: row;
            gap: 0px;
            align-items: center;
            justify-content: flex-start;
            position: absolute;
            left: 0px;
            top: 0px;
        }
        .e-hoetang-1 {
            flex-shrink: 0;
            width: 79px;
            height: 76px;
            position: relative;
            object-fit: cover;
        }
        .e-hoetang {
            color: #5236ff;
            text-align: left;
            font-family: "Lato-Black", sans-serif;
            font-size: 30px;
            font-weight: 700;
            position: relative;
        }

        nav {
            position: relative;
            width: 100%;
            height: 90vh;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin-top: 150px;
            width: 100%;
            height: 100%;
        }

        nav ul li {
            margin: 20px 0;
            width: 100%;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            display: flex;
            align-items: center;
            padding: 15px 20px;
            width: 100%;
        }

        .icon {
            width: 20px;
            height: 20px;
            fill: #7409ae;
            margin-right: 10px; 
        }

        nav ul li a img {
            margin-right: 10px; 
            width: 20px; 
            height: 20px; 
        }

        nav ul li a:hover {
            background: #3d64fd;
            border-radius: 8px;
            color: #fff;
            width: 200px;
            position: relative;
        }

        nav ul li a:hover, nav ul li a.active {
            color: #333;
        }

        nav ul li a:before {
            content: '•';
            margin-right: 10px;
            color: #333;
        }

        .logout {
            margin-top: auto;
            display: flex;
            flex-direction: row;
            gap: 10px;
            align-items: center;
            justify-content: flex-start;
            padding: 15px 20px;
            width: 100%; 
            margin-left: 53px;
            z-index: 4;
        }

        .logout :hover {
            background: #f50303;
            border-radius: 8px;
            color: #fff;
            width: 200px;
            position: relative;
        }

        .logout a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .logout a img {
            margin-right: 10px;
            width: 20px;
            height: 20px;
        }

        .header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 40px;
        }

        .header .welcome {
            display: flex;
            align-items: center;
            border-radius: 10px;
            border-style: solid;
            border-color: #dadada;
            border-width: 1px;
            width: 160px;
            height: 70px;
            position: relative;
            overflow: hidden;
            margin-left: 1070px;
            margin-top: 50px;
        }

        .header .welcome p {
            margin-right: 10px;
            margin-left: 11px;
        }

        .header .welcome img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .penghutang-list {
            display: flex;
            flex-direction: column;
            gap: 5px;
            padding: 20px;
        }

        .content-section h2 {
            margin-left: 25px;
        }

        .penghutang-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #fff;
            border: 1px solid #dadada;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin: 20px;
        }

        .button {
            padding: 10px 20px;
            border: 1px solid #dadada;
            border-radius: 15px;
            background-color: #fff;
            color: #333;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            outline: none;
        }

        .button:hover {
            background-color: #5236ff;
        }

        .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }

        .details {
            flex-grow: 1;
            margin-left: 20px;
            font-size: 14px; 
            line-height: 1.5;
        }

        .details p {
            margin: 5px 0;
        }

        .credit-score {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-width: 150px; 
        }

        .credit-score .score {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .status-button {
            background-color: #5236ff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 14px; 
            cursor: pointer;
        }

        .status-button:hover {
            background-color: #3d64fd;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img class="e-hoetang-1" src="view/img/E-Hoetang 1.png" />
                <div class="e-hoetang">E-Hoetang</div>
            </div>
            <nav>
                <ul>
                    <li><a href="?page=debtcollect" class="<?php echo $activePage == 'debtcollect' ? 'active' : ''; ?>"><img src="view/img/eye_tracking.png" class="icon" alt="Ajukan Peminjaman Icon">Target Sasaran</a></li>
                    <li><a href="?page=biodata" class="<?php echo $activePage == 'biodata' ? 'active' : ''; ?>"><img src="view/img/settings_account_box.png" alt="List Hutang Icon"> Akun</a></li>
                </ul>
            </nav>
            <div class="logout">
                <a href="<?= urlpath('dashboard/logout'); ?>"><img src="view/img/move_item.png" alt="Logout Icon">Log Out</a>
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
