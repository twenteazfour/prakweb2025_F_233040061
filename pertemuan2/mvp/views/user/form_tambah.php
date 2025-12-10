<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah User</title>
</head>
<body>
    <h2>Tambah User</h2>
    <form action="?c=User&a=simpan" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <button type="submit">Simpan</button>
    </form>
    <p><a href="?c=User&a=index">Kembali</a></p>
</body>
</html>
