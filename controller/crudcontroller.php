<?php

include 'model/crudmodel.php';

class TransaksiController
{
    // static function detailTransaksi() {
    //     if (!isset($_SESSION['user'])) {
    //         header('Location: '.BASEURL.'auth?auth=false');
    //         exit;
    //     } else {
    //         if ($_SESSION['user']['role'] === 'renter') {
    //             view('renter/layout', [
    //                 'url' => 'detail_pesanan',
    //                 'transaksi' => Transaksi::selectTransaksiUser($_SESSION['user']['username'], )
    //             ]);
    //         } else {
    //             header('Location: '.BASEURL.'auth?auth=false');
    //             exit;
    //         }
    //     }
    // }

    static function edit()
    {
        if (!isset($_SESSION['debtcollector'])) {
            header('Location: ' . BASEURL . 'auth?auth=false');
            exit;
        } else {
            if ($_SESSION['user']['role'] === 'debtcollector') {
                $post = array_map('htmlspecialchars', $_POST);
                view('DebtColl/layout', [
                    'url' => 'add',
                    'nama' => $post['nama'],
                    'tgl' => $post['tgl'],
                    'jkl' => $post['jkl'],
                    'nik' => $post['nik'],
                    'email' => $post['email'],
                    'nohp' => $post['nohp'],
                    'alamat' => $post['alamat']
                ]);
            } else {
                header('Location: '.BASEURL.'auth?auth=false');
                exit;
            }
        }
    }

    static function saveedit()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'auth?auth=false');
            exit;
        } else {
            $foto = UserModel::uploadFile(); 
            if (!$foto) {
                return false; 
            }
            else if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $edit = DebtModel::updateDebt([
                    'nama' => $post['nama'],
                    'tgl' => $post['tgl'],
                    'jkl' => $post['jkl'],
                    'nik' => $post['nik'],
                    'email' => $post['email'],
                    'nohp' => $post['nohp'],
                    'alamat' => $post['alamat'],
                    'foto' => $foto 
                ]);
            }
            echo "<script>
            alert('Transaksi berhasil! Tunggu pesananmu diproses oleh admin');
            window.location.href = '".BASEURL."dashboard/pesanan-saya';
        </script>";
        }
    }
    static function read(){

    }
}
?>