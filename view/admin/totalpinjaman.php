<head>
    <style>
        .content h2 {
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

        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #FFFFFF66;            ;
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .popup-content h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .popup-content .image-container {
            margin-bottom: 20px;
        }

        .popup-content .image-container img {
            max-width: 100%;
            height: auto;
        }

        .popup-content .button-container {
            display: flex;
            justify-content: space-around;
        }

        .popup-content .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .popup-content .button.confirm {
            background-color: #5236ff;
            color: #fff;
        }

        .popup-content .button.cancel {
            background-color: #ff3b3b;
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="totalpinjaman" class="content">
        <h2>Total Pinjaman</h2>
        <div class="button-group">
            <button class="button">Semua Penghutang</button>
            <button class="button">>15 Juta</button>
            <button class="button">15> juta</button>
        </div>
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
                    <div class="score">70%</div>
                    <button class="status-button" onclick="showPopup()">Tagih Sekarang</button>
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
                    <div class="score">40%</div>
                    <button class="status-button" onclick="showPopup()">Tagih Sekarang</button>
                </div>
            </div>
        </div>
    </div>
    <div id="popup" class="popup">
        <div class="popup-content">
            <h1>Apakah Anda Yakin Menagihnya Sekarang?</h1>
            <div class="image-container">
                <img src="../img/confussion 1.png" alt="Illustrasi Pertanyaan">
            </div>
            <div class="button-container">
                <button class="button confirm">Tagih Sekarang</button>
                <button class="button cancel" onclick="hidePopup()">Nanti aja</button>
            </div>
        </div>
    </div>
    <script>
        function showPopup() {
            document.getElementById('popup').style.display = 'flex';
        }

        function hidePopup() {
            document.getElementById('popup').style.display = 'none';
        }
    </script>
</body>
</html>
