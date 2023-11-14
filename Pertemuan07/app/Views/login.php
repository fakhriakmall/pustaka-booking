<!-- Tampilan untuk halaman login -->
<form action="/auth/studentLogin" method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login as Student</button>
</form>
<!-- Buat juga form untuk login guru (teacher) dan admin -->

<!-- Tampilkan pesan error jika ada -->
<?php if(session()->has('error')): ?>
    <p><?= session('error') ?></p>
<?php endif; ?>
