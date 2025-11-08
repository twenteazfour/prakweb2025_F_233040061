<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="?c=User&a=update" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $user['nama'] ?>" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $user['email'] ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
    <p><a href="?c=User&a=index">Kembali</a></p>
</body>
</html>
