<head>
    <style>

.content-container {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    background: #fff;
    width: 1150px;
    border: 1px solid #C1C1C1;
    margin-left: 100px;
    
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    margin-bottom: 10px;
}

input[type="file"] {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 200px;
    text-align: center;
    background-color: #f9f9f9;
}

input[type="file"]:hover {
    cursor: pointer;
}

.form-container, .profile-container {
    background-color: transparent;
    padding: 20px;
    margin: 20px;
    border-radius: 5px;
}

.form-container {
    margin-left: -200px;
    height: 100px;
}

.profile-container {
    margin-left: 150px;
}

.form-container h2, .profile-container h2, .profile-container h3 {
    color: #333;
}

.credit-score {
    display: flex;
    align-items: center;
    margin-top: 20px;
    flex-direction: column;
}

.form-container h5  {
    color: #1B2534;
    border: none;
    padding: 10px 100px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 1em;
}

.form-container button {
    position: absolute;
    background: #3d64fd;
    color: #fff;
    width: 200px;
    height: 70px;
    font-size: 30px;
    align-items: center;
    margin-top: 220px;
}


.profile-details {
    margin-top: 20px;
}

.profile-item {
    margin-bottom: 10px;
    position: relative;
}

.profile-item label {
    font-weight: bold;
}

.profile-item input {
    width: 100%;
    padding: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 5px;
}

.profile-item input[type="email"],
.profile-item input[type="tel"] {
    margin-top: 5px;
}

    </style>
</head>
<div class="content-container">
    <div class="form-container">
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="file-upload">Pilih Foto:</label>
            <input type="file" id="file-upload" name="file-upload" accept="image/*">
        </form>
        <button>Ubah</button>
    </div>
    
    <div class="profile-container">
        <div class="profile-details">
            <h3>Ubah Biodata Diri</h3>
            <div class="profile-item">
                <label for="nama">Nama</label>
                <input type="text" id="nama">
            </div>
            <div class="profile-item">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="text" id="tgl_lahir">
            </div>
            <div class="profile-item">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" id="jenis_kelamin">
            </div>
            <div class="profile-item">
                <label for="email">Email</label>
                <input type="email" id="email">
            </div>
            <div class="profile-item">
                <label for="nomor_hp">Nomor HP</label>
                <input type="tel" id="nomor_hp">
            </div>
            <div class="profile-item">
                <label for="nik">NIK</label>
                <input type="nik" id="nik">
            </div>
        </div>
    </div>
</div>