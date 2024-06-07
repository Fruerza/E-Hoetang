<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Hoetang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../img/E-Hoetang 1.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>
<div class="register-container">
    <h2>Buat Akun</h2>
    <input type="text" placeholder="Nama Lengkap">
    <input type="text" placeholder="Username">
    <input type="email" placeholder="Email">
    <input type="password" placeholder="Password">
    <button>Buat Akun</button>
    <div class="login-link">
        Sudah Punya Akun? <a href="login.php">Log In</a>
    </div>
</div>
</body>


<style>
    .register-container {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin: 0 auto;
        margin-top: 120px;
    }

    .register-container h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .register-container input[type="text"],
    .register-container input[type="email"],
    .register-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .register-container button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .register-container button:hover {
        background-color: #0056b3;
    }

    .register-container .login-link {
        text-align: center;
        margin-top: 10px;
    }

    .register-container .login-link a {
        color: #007bff;
        text-decoration: none;
    }

    .register-container .login-link a:hover {
        text-decoration: underline;
    }
</style>
