<!-- Tpinjaman.php -->
<section class="Total">
    <div class="Pinjaman">
        <img src="view/img/Illustration (1).png" alt="Bank Loan Approved">
    </div>
    <div class="desc">
        <h2>Lakukan Pembayaran Hari Ini, dan Rasakan Bebas dari Stres Esok Hari</h2>
        <p>Bayar Sekarang, Nikmati Hidup Tenang</p>
        <a href="<?= urlpath('dashboard/tagihan'); ?>"><button id="bayarSekarang">Bayar Sekarang</button></a>
    </div>
</section>

<script>
    document.getElementById('bayarSekarang').addEventListener('click', function() {
        window.location.href = 'Tpinjaman1.php';
    });
</script>