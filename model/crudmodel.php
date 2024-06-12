<?php

include_once 'config/conn.php';

class UserModel
{
    private $db;
    static function updateProfile($idpelanggan, $data)
    {
        global $conn;
        $sql = "UPDATE pelanggan SET nama = ?, tanggal_lahir = ?, jenis_kelamin = ?, email = ?, nohp = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $data['nama'], $data['tgl'], $data['jkl'], $data['email'], $data['nohp'], $idpelanggan);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }
    public function createPelanggan($nik, $foto, $nama, $tanggal_lahir, $jenis_kelamin, $pekerjaan, $nohp, $alamat, $status, $username) {
        $query = "INSERT INTO pelanggan (nik, foto, nama, tanggal_lahir, jenis_kelamin, pekerjaan, nohp, alamat, status, username) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssssssssss", $nik, $foto, $nama, $tanggal_lahir, $jenis_kelamin, $pekerjaan, $nohp, $alamat, $status, $username);
        return $stmt->execute();
    }
    public static function uploadFile($foto) {
        $uploadDirectory = 'C:/laragon/www/E-HOETANG/upload/';
        $tmpFilePath = $file['tmp_name'];
        $newFileName = uniqid(). '_'. basename($file['name']);
        $targetFilePath = $uploadDirectory. '/'. $newFileName;
        if (move_uploaded_file($tmpFilePath, $targetFilePath)) {
            return $newFileName;
        } else {
            return false;
        }
    }
    public function updateUser($id, $nama, $tanggal_lahir, $jenis_kelamin, $no_hp, $email, $NIK, $foto) {
        global $conn;
        $sql = "UPDATE pelanggan SET nama = ?, tgl = ?, jkl = ?, email = ?, nohp = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $data['nama'], $data['tgl'], $data['jkl'], $data['email'], $data['nohp'], $idpelanggan);
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


class DbAdminModel {
    private $conn;

    public function __construct($database) {
        $this->conn = $database->getConnection();
    }

    public function createDbAdmin($nama, $tanggal_lahir, $jenis_kelamin, $no_hp, $NIK, $foto) {
        $query = "INSERT INTO dbadmin (nama, tanggal_lahir, jenis_kelamin, no_hp, NIK, foto) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssss", $nama, $tanggal_lahir, $jenis_kelamin, $no_hp, $NIK, $foto);
        return $stmt->execute();
    }

    public function getDbAdminById($id) {
        $query = "SELECT * FROM dbadmin WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function getAllDbAdmin() {
        $query = "SELECT * FROM dbadmin";
        $result = $this->conn->query($query);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function updateDbAdmin($id, $nama, $tanggal_lahir, $jenis_kelamin, $no_hp, $NIK, $foto) {
        $query = "UPDATE dbadmin SET nama = ?, tanggal_lahir = ?, jenis_kelamin = ?, no_hp = ?, NIK = ?, foto = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssi", $nama, $tanggal_lahir, $jenis_kelamin, $no_hp, $NIK, $foto, $id);
        return $stmt->execute();
    }

    public function deleteDbAdmin($id) {
        $query = "DELETE FROM dbadmin WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

class DebtModel {
    private $conn;

    public function __construct($database) {
        $this->conn = $database->getConnection();
    }

    public function createDebt($nama, $tanggal_lahir, $jenis_kelamin, $no_hp, $email, $NIK, $foto) {
        $query = "INSERT INTO debt (nama, tanggal_lahir, jenis_kelamin, no_hp, email, NIK, foto) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssssss", $nama, $tanggal_lahir, $jenis_kelamin, $no_hp, $email, $NIK, $foto);
        return $stmt->execute();
    }

    public function getDebtById($id) {
        $query = "SELECT * FROM debt WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function getAllDebt() {
        $query = "SELECT * FROM debt";
        $result = $this->conn->query($query);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    public function deleteDebt($id) {
        $query = "DELETE FROM debt WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
    public function updateDebt($id, $nama, $tanggal_lahir, $jenis_kelamin, $no_hp, $email, $NIK, $foto) {
        global $conn;
        $sql = "UPDATE debt SET nama = '$nama', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', no_hp = '$no_hp', email = '$email', NIK = '$NIK', foto = '$foto' WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $data['nama'], $data['tgl'], $data['jkl'], $data['email'], $data['nohp'], $idpelanggan);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

}

class PelangganModel {
    private $conn;

    public function __construct($database) {
        $this->conn = $database->getConnection();
    }

    public function createPelanggan($jumlahpinjaman, $jangkawaktu, $tujuanpinjaman, $norek, $nik, $foto, $nama, $tanggal_lahir, $jenis_kelamin, $pekerjaan, $nohp, $alamat, $status, $username) {
        $query = "INSERT INTO pelanggan (jumlahpinjaman, jangkawaktu, tujuanpinjaman, norek, nik, foto, nama, tanggal_lahir, jenis_kelamin, pekerjaan, nohp, alamat, status, username) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssssssssss", $jumlahpinjaman, $jangkawaktu, $tujuanpinjaman, $norek, $nik, $foto, $nama, $tanggal_lahir, $jenis_kelamin, $pekerjaan, $nohp, $alamat, $status, $username);
        return $stmt->execute();
    }

    public function getPelangganById($id) {
        $query = "SELECT * FROM pelanggan WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function getAllPelanggan() {
        $query = "SELECT * FROM pelanggan";
        $result = $this->conn->query($query);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function updatePelanggan($id, $jumlahpinjaman, $jangkawaktu, $tujuanpinjaman, $norek, $nik, $foto, $nama, $tanggal_lahir, $jenis_kelamin, $pekerjaan, $nohp, $alamat, $status, $username) {
        $query = "UPDATE pelanggan SET jumlahpinjaman = ?, jangkawaktu = ?, tujuanpinjaman = ?, norek = ?, nik = ?, foto = ?, nama = ?, tanggal_lahir = ?, jenis_kelamin = ?, pekerjaan = ?, nohp = ?, alamat = ?, status = ?, username = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssssssssssi", $jumlahpinjaman, $jangkawaktu, $tujuanpinjaman, $norek, $nik, $foto, $nama, $tanggal_lahir, $jenis_kelamin, $pekerjaan, $nohp, $alamat, $status, $username, $id);
        return $stmt->execute();
    }

    public function deletePelanggan($id) {
        $query = "DELETE FROM pelanggan WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

?>