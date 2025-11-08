<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar User</title>
</head>
<body>
    <h2>Daftar User</h2>
    <ul>
        <?php foreach ($users as $u): ?>
            <li>
                <?= $u['nama'] ?> - <?= $u['email'] ?> -
                <a href="?c=User&a=detail&id=<?= $u['id'] ?>">Detail</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
