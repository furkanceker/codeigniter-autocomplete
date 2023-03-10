<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="<?= base_url('assets/custom.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/jquery-ui/jquery-ui.css') ?>">
</head>
<body>
    <div class="container">
        <img src="<?= base_url('assets/logo.png') ?>" alt="logo">
        <input type="text" name="term" id="search" placeholder="İsim Arayın...">
        <small>Aradığınız Kişi Bilgileri Burada!</small>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="<?= base_url('assets/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('assets/custom.js') ?>"></script>
</body>
</html>