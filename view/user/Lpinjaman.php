<div class="loan-container">
    <div class="loan-header">
        <div class="header-item">Tagihan Bulan Ini</div>
        <div class="header-value">Rp. 11.500.000,00</div>
    </div>
    <div class="loan-header1">
        <div class="header-item1">Limit Pinjaman Anda</div>
        <div class="header-value1">Rp. 100.000.000,00</div>
    </div>
</div>

<div class="loan-content">
        <h2>Riwayat Pinjaman</h2>
        <div class="filter-buttons">
            <button>Semua Pinjaman</button>
            <button>Lunas</button>
            <button>Belum Dibayar</button>
        </div>
</div>
<div class="loan-history">
<div class="tabel">
        <table cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Nama Renter</th>
                <th>Tanggal Sewa</th>
                <th>Nama Gedung</th>
                <th>Jam Sewa</th>
                <th>Nama Lapangan</th>
                <th>Bukti Transfer</th>
                <th>Status</th>
            </tr>

            <?php $i = 1;
            foreach ($transaksi as $row) :
                if (!isset($_GET['keyword']) || $row['nama_gedung'] == $_GET['keyword'] || $row['nama_lapangan'] == $_GET['keyword'] || $row['status'] == $_GET['keyword']) :
            ?>

                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['tanggal'] ?></td>
                        <td><?= $row['nama_gedung'] ?></td>
                        <td><?= $row['jam_sewa'] ?></td>
                        <td><?= $row['nama_lapangan'] ?></td>
                        <td class="gambarTabel"><img src="../img/bukti_transaksi/<?= $row['bukti_transfer'] ?>" alt="bukti transfer"></td>
                        <td><?= $row['status'] ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endif ?>
            <?php endforeach ?>

        </table>
    </div>


    <div class="loan-item">
        <div class="loan-details">
            <div class="loan-date">Jangka Waktu Pinjaman: 29 Mei 2024</div>
            <div class="loan-amount">Rp. 1.000.000,00</div>
            <div class="loan-id">318301043******</div>
            <div class="total-price">Total Harga Rp. 1.015.000,00</div>
        </div>
        <div class="loan-status">Lunas</div>
    </div>
    <div class="loan-item">
        <div class="loan-details">
            <div class="loan-date">Jangka Waktu Pinjaman: 01 Mei 2024</div>
            <div class="loan-amount">Rp. 5.000.000,00</div>
            <div class="loan-id">318301043******</div>
            <div class="total-price">Total Harga Rp. 5.075.000,00</div>
        </div>
        <div class="loan-status">Belum Lunas</div>
    </div>
</div>
    <!-- <div class="loan-content">
        <h2>Riwayat Pinjaman</h2>
        <div class="filter-buttons">
            <button>Semua Pinjaman</button>
            <button>Lunas</button>
            <button>Belum Dibayar</button>
        </div>
        <div class="loan-history">
            <div class="loan-item">
                <div class="loan-details">
                    <div class="loan-date">Jangka Waktu Pinjaman: 15 Oktober 2024</div>
                    <div class="loan-amount">Rp. 1.000.000,00</div>
                    <div class="loan-id">318301043******</div>
                    <div class="total-price">Total Harga Rp. 1.015.000,00</div>
                </div>
                <div class="loan-status">Lunas</div>
            </div>
            <div class="loan-item">
                <div class="loan-details">
                    <div class="loan-date">Jangka Waktu Pinjaman: 17 Agustus 2024</div>
                    <div class="loan-amount">Rp. 5.000.000,00</div>
                    <div class="loan-id">318301043******</div>
                    <div class="total-price">Total Harga Rp. 5.075.000,00</div>
                </div>
                <div class="loan-status">Belum Lunas</div>
            </div>
        </div>
    </div>
</div> -->
