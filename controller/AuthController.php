<?php

include_once 'model/authmodel.php';

class AuthController {
    static function login() {
        view('auth_page/layout', ['url' => 'login']);
    }

    static function register() {
        view('auth_page/layout', ['url' => 'register']);
    }

    static function saveLogin() {
        $post = array_map('htmlspecialchars', $_POST);

        // Attempt to log in the user
        $user = User::login([
            'email' => $post['email'], 
            'password' => $post['password']
        ]);
        // var_dump($user);
        if ($user) {
            // Store user information in session, excluding sensitive data like password
            unset($user['password']);  // Assuming the password column is called 'password'
            $_SESSION['user'] = $user;
            header('Location: '.BASEURL.'dashboard');
        } else {
            header('Location: '.BASEURL.'login');
        }
        exit();  // Ensure no further code is executed after redirection
    }

    static function saveRegister() {
        $post = array_map('htmlspecialchars', $_POST);

        // Attempt to register the user
        $user = User::register([
            'nama' => $post['nama'], 
            'nik' => $post['nik'], 
            'password' => $post['passwd'],
            'notelp' => $post['notelp'],
            'email' => $post['email']
        ]);

        if ($user) {
            header('Location: '.BASEURL.'register');
        } else {
            header('Location: '.BASEURL.'auth?failed=true');
        }
        exit();  // Ensure no further code is executed after redirection
    }

    static function logout() {
        // Unset all session variables
        $_SESSION = [];

        // If session cookies are used, expire them
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
        header('Location: '.BASEURL);
        exit();  // Ensure no further code is executed after redirection
    }

    static function forgotPassword() {
        // Placeholder for forgot password functionality
    }
    
    static function check() {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            if ($user['role'] == 'admin') {
                view('admin/layout', ['url' => 'home']);
            } elseif ($user['role'] == 'user') {
                view('user/layout', ['url' => 'home']);
            } elseif ($user['role'] == 'c') {
                view('DebtColl/layout', ['url' => 'home']);
            } else {
                redirect('login');
            }
        } else {
            redirect('login');
        }
    }
}
?>
 