<body>
<form method="POST" action="<?= urlpath('daftar') ?>" id="signup-form" class="form">
<div class="register-container">
    <h2>Buat Akun</h2>
    <input name = 'nama' id = 'nama' type="text" placeholder="Nama Lengkap">
    <input name = 'nik' id = 'nik' type="text" placeholder="NIK">
    <input name = 'notelp' id = 'notelp' type="text" placeholder="No Telepon">
    <input name = 'email' id = 'email' type="email" placeholder="Email">
    <input name = 'passwd' id = 'passwd' type="password" placeholder="Password">
    <button>Buat Akun</button>
    <div class="login-link">
        Sudah Punya Akun? <a href="<?= urlpath('login'); ?>">Log In</a>
    </div>
</div>
</form>
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
