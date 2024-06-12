<?php

include_once 'config/conn.php';

class User
{
    // static function select()
    // {
    //     global $conn;
    //     $sql = "SELECT * FROM transaksi";
    //     $result = mysqli_query($conn, $sql);
    //     $data = array();
    //     if ($result->num_rows > 0) {
    //         while ($a = $result->fetch_array()) {
    //             $data[] = $a;
    //         }
    //     }
    //     return $data;
    // }
    // static function selectTransaksiUser($username)
    // {
    //     global $conn;
    //     $sql = "SELECT id_transaksi, username, tanggal, nama_gedung, jam_sewa, nama_lapangan, bukti_transfer, transaksi.status FROM `transaksi`
    //             INNER JOIN users ON user_id = id_user
    //             INNER JOIN detail_gedung ON detail_id = id_detail
    //             INNER JOIN gedung ON gedung_id = id_gedung
    //             INNER JOIN jam ON jam_id = id_jam
    //             WHERE username = '$username'";
    //     $result = mysqli_query($conn, $sql);
    //     $data = array();
    //     if ($result->num_rows > 0) {
    //         while ($a = $result->fetch_array()) {
    //             $data[] = $a;
    //         }
    //     }
    //     return $data;
    // }
    static function selectPelangganByUsername($username)
    {
        global $conn;
        $sql = "SELECT * FROM pelanggan WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        $stmt->close();
        return $data;
    }
    // static function createPelanggan($data)
    // {
    //     global $conn;
    //     $sql = "INSERT INTO pelanggan (jumlahpinjaman, jangkawaktu, tujuanpinjaman, norek, foto, nama, tanggal_lahir, jenis_kelamin, pekerjaan, nohp, alamat, status, username) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param("issississssss", $data['jumlahpinjaman'], $data['jangkawaktu'], $data['tujuanpinjaman'], $data['norek'], $data['foto'], $data['nama'], $data['tanggal_lahir'], $data['jenis_kelamin'], $data['pekerjaan'], $data['nohp'], $data['alamat'], $data['status'], $data['username']);
    //     $stmt->execute();
    //     $result = $stmt->affected_rows > 0 ? true : false;
    //     $stmt->close();
    //     return $result;
    // }

    static function updateProfile($idpelanggan, $data)
    {
        global $conn;
        $sql = "UPDATE pelanggan SET nama = ?, tanggal_lahir = ?, jenis_kelamin = ?, email = ?, nohp = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $data['nama'], $data['tanggal_lahir'], $data['jenis_kelamin'], $data['email'], $data['nohp'], $idpelanggan);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }
    static function selectSatu($id_transaksi)
    {
        global $conn;
        $sql = "SELECT * FROM transaksi WHERE id_transaksi=" . $id_transaksi;
        $result = mysqli_query($conn, $sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($a = $result->fetch_array()) {
                $data[] = $a;
            }
        }
        return $data;
    }
    static function create($data)
    {
        global $conn;
        $tanggal = htmlspecialchars($data['tanggal']); 
        $idJam = htmlspecialchars($data['jam_id']);
        $idDetail = htmlspecialchars($data['detail_id']);
        $idUser = htmlspecialchars($data['user_id']);
        $status = 'diproses';
        $bukti = $data['bukti_transfer']; 
    
        $sql = "INSERT INTO transaksi(detail_id, jam_id, user_id, tanggal, bukti_transfer, status) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iiisss', $idDetail, $idJam, $idUser, $tanggal, $bukti, $status);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }
    
    static function upload()
    {

        $namaFile = $_FILES["bukti_transfer"]["name"];
        $ukuranFile = $_FILES["bukti_transfer"]["size"];
        $error = $_FILES["bukti_transfer"]["error"];
        $tmpName = $_FILES["bukti_transfer"]["tmp_name"];

        //cek apakah ada gambar yang di upload
        if ($error !== 4) {
            // cek apakah yang diupload gambar
            $eksentensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            if (!in_array($ekstensiGambar, $eksentensiGambarValid)) {
                echo "
                <script>
                    alert('Upload hanya gambar, jangan file lain!')
                    window.location.href = '".BASEURL."dashboard/pesanan-saya';
                </script>;
                ";
                return false;
            } else if (in_array($ekstensiGambar, $eksentensiGambarValid)) {
                // cek jika ukurannya terlalu besar
                if ($ukuranFile > 1000000) {
                    echo "
                    <script>
                        alert('Ukuran gambar terlalu besar!')
                        window.location.href = '".BASEURL."dashboard/pesanan-saya';
                    </script>;
                    ";
                    return false;
                } else {
                    // generate nama file baru
                    $namaFileBaru = uniqid();
                    $namaFileBaru .= "." . $ekstensiGambar;
                    // lolos pengecekan, gambar siap diupload
                    move_uploaded_file($tmpName, 'img/bukti_transaksi/' . $namaFileBaru);
                    return $namaFileBaru;
                }
            }
        } else {
            return true;
        }
    }

    static function update($data)
    {
        global $conn;
        $id = htmlspecialchars($data['id_transaksi']);
        $tanggal_transaksi = htmlspecialchars($data['tanggal_transaksi']); 
        $nama_penyewa = htmlspecialchars($data['nama_penyewa']);
        $barang_disewa = htmlspecialchars($data['barang_disewa']);
        $jumlah_harga = htmlspecialchars($data['jumlah_harga']);
        $nomor_telepon = htmlspecialchars($data['nomor_telepon']);
        $gambarLama = htmlspecialchars($data['gambarLama']);

        // cek apakah user memilih gambar baru atau tidak
        if ($_FILES['struk']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = self::upload();
        }

        if (!$gambar) {
            return false;
        }

        $stmt = $conn->prepare("UPDATE transaksi set tanggal_transaksi=?, nama_penyewa=?, barang_disewa=?, jumlah_harga=?, nomor_telepon=?, gambar=? WHERE id_transaksi=?");
        $stmt->bind_param("sssissi", $tanggal_transaksi, $nama_penyewa, $barang_disewa, $jumlah_harga, $nomor_telepon, $gambar, $id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function delete($iddc)
    {
        global $conn;
        $sql = "SELECT * FROM debt";
        $result = mysqli_query($conn, $sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    static function deleteGambar($id_transaksi)
    {
        global $conn;
        $gambar = 'none';
        $stmt = $conn->prepare("UPDATE transaksi set gambar=? WHERE id_transaksi=" . $id_transaksi);
        $stmt->bind_param("s", $gambar);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function rawQuery($sql) {
        global $conn;
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        return $rows;
    }
}