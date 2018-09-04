<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include '../_template/modules/header.php'; ?>
<div class="content">
        <?= $mass['var']; ?>
    <div style="display: none;">
        <div class="box-modal" id="exampleModal">
            <div class="box-modal_close arcticmodal-close">закрыть</div>
            arcticmodal подключен
        </div>
    </div>

</div>
<?php include '../_template/modules/footer.php'; ?>
</body>
</html>
