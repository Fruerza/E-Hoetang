<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
    <style>
        body {
            background-color: #fff;
            color: #000;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 800px;
            height: 400px;
        }
        .form-container h2 {
            color: #000;
        }
        .form-container label {
            display: block;
            margin-top: 10px;
        }
        .form-container input[type="text"],
        .form-container input[type="file"] {
            width: 100%;
            padding: 10px 2px;
            margin-top: 5px;
            border: 1px solid #C1C1C1;
            border-radius: 4px;
            background-color: #fff;
            color: #000000;
;
        }
        .form-container input[type="submit"] {
            background-color: #4A00E0;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }
        .form-container input[type="submit"]:hover {
            background-color: #3a00b8;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Pembayaran</h2>
        <form>
            <label for="jumlah">Jumlah yang harus dibayar</label>
            <input type="text" id="jumlah" name="jumlah">

            <label for="nominal">Nominal Pembayaran</label>
            <input type="text" id="nominal" name="nominal">

            <label for="bukti">Bukti Pembayaran (Jika pembayaran melewati bank/supermarket)</label>
            <input type="file" id="bukti" name="bukti">

            <input type="submit" value="Bayar Sekarang">
        </form>
    </div>
</body>
</html>
