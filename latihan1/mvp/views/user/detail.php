<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail User</title>
</head>
<body>
    <h2>Detail User</h2>
    <?php if ($user): ?>
        <p>Nama: <?= $user['nama'] ?></p>
        <p>Email: <?= $user['email'] ?></p>
    <?php else: ?>
        <p>User tidak ditemukan.</p>
    <?php endif; ?>

    <p><a href="?c=User&a=index">Kembali ke daftar</a></p>
</body>
</html>
