<?php
// Include necessary files
include_once 'config/static.php';
include_once 'controller/main.php';
include_once 'controller/Authcontroller.php';  
include_once 'controller/Dashcontroller.php';  
include_once 'controller/crudcontroller.php';  
include_once 'function/main.php';

// Define your routes
Router::url('/', 'get', function () { 
    return view('home'); 
});

Router::url('login', 'get', 'AuthController::login');
Router::url('register', 'get', 'AuthController::register');
Router::url('dashboard/logout', 'get', 'AuthController::logout');
Router::url('dashboard', 'get', 'DashboardController::index');
Router::url('dashboard/ajukanpeminjaman', 'get', 'DashboardController::ajukan');
Router::url('dashboard/tagihan', 'get', 'DashboardController::tagihan');
Router::url('dashboard/bayar', 'get', 'DashboardController::bayar');
Router::url('dashboard/editdc', 'get', 'TransaksiController::edit');

Router::url('masuk', 'post', 'AuthController::saveLogin');
Router::url('daftar', 'post', 'AuthController::saveRegister');
Router::url('edit', 'post', 'TransaksiController::saveedit');

// Initialize the Router
new Router();
?>
