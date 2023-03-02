<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/custom.css') ?>">
    <title>Detay</title>
</head>
<body>
    <table>
        <tbody>
            <tr><td><strong>ID : </strong><?= $row->id ?></td></tr>
            <tr><td><strong>Adı : </strong><?= $row->title ?></td></tr>
            <tr><td><strong>Yaşı : </strong><?= $row->age ?></td></tr>
            <tr><td><strong>Şehir : </strong><?= $row->city ?></td></tr>
        </tbody>
    </table>
</body>
</html>