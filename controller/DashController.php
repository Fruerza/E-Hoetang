<?php

include_once 'model/authmodel.php';

class DashboardController {
    
    static function index() {
            if (!isset($_SESSION['user'])) {
                header('Location: '.BASEURL.'auth?auth=false');
                exit;
            } else {
                if ($_SESSION['user']['role'] === 'admin') {
                    view('admin/layout', [
                        'url' => 'home',
                    ]);
                } elseif ($_SESSION['user']['role'] === 'user') {
                    view('user/layout', [
                        'url' => 'home',
                    ]);
                } elseif ($_SESSION['user']['role'] === 'debtcollector') {
                    view('DebtColl/layout', [
                        'url' => 'home'
                    ]);
                }
                
            }
    }
    static function ajukan(){
        view('user/Ppinjaman2', ['url' => 'home']);
    }
    static function tagihan(){
        view('user/Tpinjaman1', ['url' => 'home']);
    }
    static function bayar(){
        view('user/Tpinjaman2', ['url' => 'home']);
    }
}
?>