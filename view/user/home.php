    <style>
        .content-section {
            display: none;
            opacity: 100;
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
            width: 100vh;
        }

        .sidebar {
            width: 250px;
            height: 95vh;
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
            color: #0066ff;
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
        }

        .logout :hover {
            background: #e90fc9;
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
            z-index: 5;
        }

        .logout a img {
            margin-right: 10px;
            width: 20px;
            height: 20px;
        }

        .main-content {
            flex-grow: 1;
            padding: 40px;
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
            margin-right : -98vh;
            width: 160px;
            height: 70px;
            position: relative;
            overflow: hidden;
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

        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            position: absolute;
        }

        .illustration img {
            width: 100%;
            max-width: 500px; 
            margin-top: -30px;
            margin-left: 50px;

        }

        .text-content {
            text-align: center;
            max-width: 550px;
            word-wrap: break-word; 
            margin-top: -480px;
            margin-left: 700px;
        }

        .text-content h2 {
            font-size: 45px;
            color: #3D64FD;
            margin-bottom: 10px;
        }

        .text-content p {
            color: #6c757d;
            margin-bottom: 20px;
        }

        .text-content .apply-button a {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            gap: 300px;
        }

        .Total {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .Pinjaman img {
            width: 500px;
        }

        .desc {
            text-align: center;
            max-width: 550px;
            word-wrap: break-word; 
            margin-top: -40px;
            margin-left: 100px;
        }

        .desc h2 {
            font-size: 50px;
            color: #3D64FD;
            margin-bottom: 10px;
        }

        .desc p {
            color: #6c757d;
            margin-bottom: 20px;
        }

        .desc button {
            background-color: #0066ff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .desc button:hover {
            background-color: #0052cc;
        }

        .loan-container,
        .loan-container * {
            box-sizing: border-box;
        }

        .loan-container {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .loan-header,
        .loan-content {
            margin: 0 30px; /* Menambahkan jarak kanan dan kiri sebesar 10px */
        }

        .loan-header {
            background: #ffffff;
            border-radius: 10px;
            border-style: solid;
            border-color: #e5e5e5;
            border-width: 2px;
            flex-shrink: 0;
            width: 533px;
            height: 145px;
            position: relative;
            overflow: hidden;
        }

        .header-item {
            color: #242331;
            text-align: left;
            font-family: "Nunito-Bold", sans-serif;
            font-size: 30px;
            line-height: 125%;
            font-weight: 700;
            position: absolute;
            left: calc(50% - 120.5px);
            top: 15px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .header-value {
            color: #242331;
            text-align: left;
            font-family: "Nunito-Bold", sans-serif;
            font-size: 30px;
            line-height: 125%;
            font-weight: 700;
            position: absolute;
            left: calc(50% - 118px);
            top: 72px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .loan-header1 {
            background: #ffffff;
            border-radius: 10px;
            border-style: solid;
            border-color: #e5e5e5;
            border-width: 2px;
            flex-shrink: 0;
            width: 533px;
            height: 145px;
            position: relative;
            overflow: hidden;
        }

        .header-item1 {
            color: #242331;
            text-align: left;
            font-family: "Nunito-Bold", sans-serif;
            font-size: 30px;
            line-height: 125%;
            font-weight: 700;
            position: absolute;
            left: calc(50% - 120.5px);
            top: 15px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .header-value1 {
            color: #242331;
            text-align: left;
            font-family: "Nunito-Bold", sans-serif;
            font-size: 30px;
            line-height: 125%;
            font-weight: 700;
            position: absolute;
            left: calc(50% - 109px);
            top: 72px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .loan-content {
            padding: 20px;
            background-color: #f9f9f9;
        }

        .loan-content h2 {
            margin: 0;
            padding-bottom: 10px;
            font-size: 1.5em;
            color: #333;
        }

        .filter-buttons {
            display: flex;
            justify-content: left;
            margin-top: 20px;
        }

        .filter-buttons button {
            background-color: #fff;
            color: #C1C1C1;
            border: none;
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1em;
        }

        .filter-buttons button:hover {
            background-color: #5236FF;
        }

        .loan-history {
            border-top: 1px solid #ddd;
        }

        .loan-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .loan-details {
            max-width: 70%;
        }

        .loan-date,
        .loan-amount,
        .loan-id,
        .total-price {
            margin: 5px 0;
            font-size: 0.9em;
            color: #333;
        }

        .loan-status {
            align-self: center;
            background-color: #6200ea;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .loan-status:hover {
            background-color: #3700b3;
        }

        .content-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            background: #fff;
            width: 1150px;
            
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 10px;
        }

        input[type="file"] {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
            text-align: center;
            background-color: #f9f9f9;
        }

        input[type="file"]:hover {
            cursor: pointer;
        }

        .form-container, .profile-container {
            background-color: transparent;
            padding: 20px;
            margin: 20px;
            border-radius: 5px;
        }

        .form-container {
            margin-left: -200px;
            height: 100px;
        }

        .profile-container {
            margin-left: 150px;
        }

        .form-container h2, .profile-container h2, .profile-container h3 {
            color: #333;
        }

        .credit-score {
            display: flex;
            align-items: center;
            margin-top: 20px;
            flex-direction: column;
        }

        .form-container h5  {
            color: #1B2534;
            border: none;
            padding: 10px 100px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1em;
        }

        .form-container button {
            position: absolute;
            background: #3d64fd;
            color: #fff;
            width: 200px;
            height: 70px;
            font-size: 30px;
            margin-left: 100px;
        }


        .profile-details {
            margin-top: 20px;
        }

        .profile-item {
            margin-bottom: 10px;
            position: relative;
        }

        .profile-item label {
            font-weight: bold;
        }

        .profile-item input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 5px;
        }

        .profile-item input[type="email"],
        .profile-item input[type="tel"] {
            margin-top: 5px;
        }


        /* .header-item {
            font-weight: bold;
            font-size: 1.1em;
        }



        .loan-content {
            padding: 20px 0;
        }

        .loan-content h2 {
            margin-top: 0;
            font-size: 1.5em;
            color: #6200ea;
        }

        .filter-buttons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .filter-buttons button {
            background-color: #6200ea;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1em;
        }

        .filter-buttons button:hover {
            background-color: #3700b3;
        }

        .loan-history {
            border-top: 1px solid #ddd;
        }

        .loan-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .loan-details {
            max-width: 70%;
        }

        .loan-date,
        .loan-amount,
        .loan-id,
        .total-price {
            margin: 5px 0;
            font-size: 0.9em;
            color: #555;
        }

        .loan-status {
            align-self: center;
            background-color: #6200ea;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .loan-status:hover {
            background-color: #3700b3;
        }  */ 

    </style>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img class="e-hoetang-1" src="view/img/E-Hoetang 1.png" />
                <div class="e-hoetang">E-Hoetang</div>
            </div>
            <nav>
                <ul>
                    
                    <li><a href="?page=ppinjaman" class="<?php echo $activePage == 'ppinjaman' ? 'active' : ''; ?>"><img src="view/img/currency_exchange.svg" class="icon" alt="Ajukan Peminjaman Icon"> Ajukan Peminjaman</a></li>
                    <li><a href="?page=list-hutang" class="<?php echo $activePage == 'list-hutang' ? 'active' : ''; ?>"><img src="view/img/checkbook.png" alt="List Hutang Icon"> List Hutang</a></li>
                    <li><a href="?page=pembayaran" class="<?php echo $activePage == 'pembayaran' ? 'active' : ''; ?>"><img src="view/img/payments.png" alt="Pembayaran Icon"> Pembayaran</a></li>
                    <li><a href="?page=akun" class="<?php echo $activePage == 'akun' ? 'active' : ''; ?>"><img src="view/img/settings_account_box.png" alt="Akun Icon"> Akun</a></li>
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
            <div class="content">
                <div id="ppinjaman" class="content-section <?php echo $activePage == 'ppinjaman' ? 'active' : ''; ?>">
                    <div class="illustration">
                        <img src="view/img/Illustration.png" alt="Illustration">
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

            // Ensure targetSection exists before proceeding
            if (targetSection) {
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
            } else {
                console.error('Target section not found:', targetPage);
            }
        });
    });
</script>

</body>
</html>
