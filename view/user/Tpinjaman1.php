<style>
    body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    }

    .container {
        width: 400px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        width: 100vh;
        margin: 50px;
        display: flex;
        justify-content: center;
    }
    .tagihan {
        background: #5236ff;
        border-radius: 15px;
        border-style: solid;
        border-color: #797979;
        border-width: 1px;
        height: 100px;
        position: relative;
        overflow: hidden;
        width: 100vh;
        margin-top: 120px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .tagihan h1 {
        color: #ffffff;
        text-align: left;
        font-family: "Nunito-Bold", sans-serif;
        font-size: 25px;
        line-height: 125%;
        font-weight: 700;
        top: 38px;
        align-items: center;
        justify-content: flex-start;
    }
    .tagihan .amount {
        margin: 5px 0 0;
        font-size: 1.2em;
    }
    .details {
        padding: 20px;
    }
    .info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        font-size: 0.9em;
        color: #555;
    }
    .amount-detail {
        font-size: 1em;
        margin-bottom: 20px;
        color: #333;
    }
    .amount-detail p {
        margin: 5px 0;
    }
    .pay-button {
        width: 220px;
        padding: 10px;
        background-color: #5A5BF7;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1em;
        cursor: pointer;
        margin-left: 500px;
    }
    .pay-button:hover {
        background-color: #4A4AD7;
    }
</style>
<body>
<div class="tagihan">
    <h1>Tagihan Bulan Ini</h1>
    <p class="amount"></p>
</div>

<section class="container">
    <div class="details">
        <div class="info">
            <p>Jangka Waktu Pinjaman: 17 Agustus 2024</p>
            <p class="date">01 Mei 2024</p>
        </div>
        <div class="amount-detail">
            <p>Rp. 5.000.000,00</p>
            <p>3180203432**</p>
            <p>Total Harga</p>
            <p>Rp. 5.075.000,00</p>
        </div>
        <a href="Tpinjaman2.php"><button class="pay-button">Bayar Sekarang</button></a>
    </div>
</section>
</body>