
<head>
    <style>
.debt-collector-item {
    display: flex;
    align-items: center;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 15px;
    background-color: #fff;
    margin-left: 0px;
    width: 100%;
    margin: 10px;
}

.collector-img {
    width: 80px;
    height: 80px;
    border-radius: 10%;
    object-fit: cover;
    margin-right: 20px;
}

.tambah {
    background-color: #4A52F7;
    color: #fff;
    padding: 10px 10px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-left: 1200px;
}

.tambah a {
    color: white;
}

.tambah:hover{
    background-color: #3a42d7;
}

.collector-details {
    flex-grow: 1;
    font-size: 14px;
}

.collector-details p {
    margin: 5px 0;
}

.deactivate-button {
    background-color: #ff0000;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s;
}

.deactivate-button:hover {
    background-color: #e60000;
}

.debtcol h2 {
    margin-left: 60px;
}
    </style>
</head>

<div class="debtcol" id="list-debt-collector">
    <h2>List Debt Collector</h2>
    <button class="tambah"><a href="formdebtcol.php">Tambahkan</a></button>
    <div class="debt-collector-item">
        <input type="file" id="profile-img1" class="profile-input" accept="image/*">
        <div class="collector-details">
            <p><strong>Nama:</strong> Arif Penjual</p>
            <p><strong>No HP:</strong> 081234567890</p>
            <p><strong>Email:</strong> arifxyz@gmail.com</p>
            <p><strong>NIK:</strong> 3525101203003001</p>
        </div>
        <button class="deactivate-button">Nonaktifkan</button>
    </div>
</div>