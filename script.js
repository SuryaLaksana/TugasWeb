document.querySelector('form').addEventListener('submit', function(e) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    const fullname = document.getElementById('fullname').value;

    if (password !== confirmPassword) {
        e.preventDefault(); 
        alert("Waduh, password dan konfirmasi password-nya nggak cocok nih. Coba cek lagi ya!");
        return;
    }

    if (password.length < 8) {
        e.preventDefault();
        alert("Password-nya kependekan, minimal 8 karakter ya!");
        return;
    }

    alert(`Halo ${fullname}, pendaftaran kamu berhasil diproses!`);
});