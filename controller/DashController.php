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
}
?>