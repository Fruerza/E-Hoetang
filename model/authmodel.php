<?php
require_once 'config/conn.php';

session_start();  // Ensure session is started

class User {
    static function login($data) {
        global $conn;
        
        $email = $data['email'];
        $password = $data['password'];

        // Prepare the statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM akun WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->get_result();
        if ($result && $row = $result->fetch_assoc()) {
            // Verify the password using password_verify
            if ($password == $row['pw']) {  // Assuming the password column is named 'password'
                return $row;
            }
        }
        return false;  // Return false if login fails
    }

    static function register($data) {
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

        // Prepare the statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT ALL
        INSERT INTO `akun`(`email`, `pw`, `role`) VALUES ('?','?','user')
        INSERT INTO `pelanggan`(`nama`, `nohp`, `nik`) VALUES ('?','?','?')
        SELECT 1 FROM dual;");
        $stmt->bind_param('ssssi', $email, $password, $nama, $notelp, $nik);
        
        $stmt->execute();
        
        return $stmt->affected_rows > 0;
    }

    static function getPassword($email) {
        global $conn;

        // Prepare the statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT password FROM akun WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['password'];
        }
        return false;
    }

    static function update($data) {
        // Update user details functionality
    }

    static function delete($id) {
        global $conn;

        // Prepare the statement to prevent SQL injection
        $stmt = $conn->prepare("DELETE FROM akun WHERE id = ?");
        $stmt->bind_param('i', $id);
        
        $stmt->execute();
        
        return $stmt->affected_rows > 0;
    }

    static function isAdmin() {
        return isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin';
    }

    static function isUser() {
        return isset($_SESSION['user']) && $_SESSION['user']['role'] == 'user';
    }

    static function isDebtCollector() {
        return isset($_SESSION['user']) && $_SESSION['user']['role'] == 'debtcollector';
    }

    static function logout() {
        session_unset();
        session_destroy();
    }
}
?>
