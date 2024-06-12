<style>
        /* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    width: 100%;
}

.login-box {
    padding: 30px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #666;
}

input[type="email"],
input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #0066cc;
}

.btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #0066cc;
    color: #ffffff;
    font-size: 16px;
    cursor: pointer;
}

.btn:hover {
    background-color: #005bb5;
}

.footer {
    margin-top: 20px;
    color: #666;
}

.footer a {
    color: #0066cc;
    text-decoration: none;
}

.footer a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <form method="POST" action="<?= urlpath('masuk') ?>" id="login-form" class="form">    
    <div class="login-container">
        <div class="login-box">
            <h2>Masuk</h2>
            <div class="input-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" id="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" id="password" required>
                </div>
                <button type="submit" class="btn">Masuk</button>
                <div class="footer">
                    <span>Tidak Punya Akun? <a href="<?= urlpath('register'); ?>">Daftar</a></span>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
