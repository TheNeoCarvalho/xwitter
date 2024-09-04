<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo $user['name'] . ' - ' . $user['email']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

