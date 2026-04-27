<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="signup-container">
        <h2>Buat Akun Baru</h2>
        
        <form action="proses_signup.php" method="POST">
            <div class="input-group">
                <label for="fullname">Nama Lengkap</label>
                <input type="text" id="fullname" name="fullname" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="contoh@mail.com" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Minimal 8 karakter" required>
            </div>

            <div class="input-group">
                <label for="confirm-password">Konfirmasi Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>

            <button type="submit" class="btn-signup">Daftar Sekarang</button>
        </form>
        
        <p class="footer-text">Sudah punya akun? <a href="#">Login di sini</a></p>
    </div>

</body>
</html>