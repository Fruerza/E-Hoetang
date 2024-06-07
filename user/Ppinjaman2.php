<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f5f5f5;
}

.form-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 800px;
}

.form-container h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500px;
}

.form-group input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.checkbox-group {
    display: flex;
    align-items: center;
}

.checkbox-group input[type="checkbox"] {
    margin-right: 10px;
}

button[type="submit"] {
    background-color: #4A00E0;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
}

button[type="submit"]:hover {
    background-color: #3a00b8;
}

    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Peminjaman</h2>
        <form>
            <div class="form-group">
                <label for="jumlah">Jumlah Pinjaman yang Diajukan</label>
                <input type="text" id="jumlah" name="jumlah">
            </div>
            <div class="form-group">
                <label for="jangka-waktu">Jangka Waktu Pinjaman</label>
                <input type="text" id="jangka-waktu" name="jangka-waktu">
            </div>
            <div class="form-group">
                <label for="tujuan">Tujuan Pinjaman</label>
                <input type="text" id="tujuan" name="tujuan">
            </div>
            <div class="form-group">
                <label for="rekening">Nomor Rekening</label>
                <input type="text" id="rekening" name="rekening">
            </div>
            <div class="form-group checkbox-group">
                <input type="checkbox" id="pernyataan" name="pernyataan">
                <label for="pernyataan">Saya menyatakan bahwa semua informasi yang saya berikan dalam formulir ini adalah benar dan akurat.</label>
            </div>
            <button type="submit">Ajukan Pinjaman</button>
        </form>
    </div>
</body>
</html>
