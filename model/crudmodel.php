<?php

include_once 'config/conn.php';

class User
{
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