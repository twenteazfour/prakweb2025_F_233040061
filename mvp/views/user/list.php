<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar User</title>
</head>
<body>
    <h2>Daftar User</h2>
    <a href="?c=User&a=tambah">+ Tambah User</a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th><th>Nama</th><th>Email</th><th>Aksi</th>
        </tr>
        <?php foreach ($users as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= $u['nama'] ?></td>
            <td><?= $u['email'] ?></td>
            <td>
                <a href="?c=User&a=detail&id=<?= $u['id'] ?>">Detail</a> |
                <a href="?c=User&a=edit&id=<?= $u['id'] ?>">Edit</a> |
                <a href="?c=User&a=hapus&id=<?= $u['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
