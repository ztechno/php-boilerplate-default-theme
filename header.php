<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php get_title() ?></title>

    <link href="<?= asset('theme/assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= asset('theme/assets/css/all.min.css')?>" rel="stylesheet">
    <link href="<?= asset('theme/assets/css/default.css')?>" rel="stylesheet">
    <link href="<?= asset('theme/assets/css/dataTables.bootstrap5.min.css')?>" rel="stylesheet">
    <?php head_script() ?>
    <script src="<?= asset('theme/assets/js/default.js')?>"></script>
</head>
<body class="bg-light">

    <div class="body-content d-flex">

        <?php get_sidebar() ?>

        <div class="content-wrapper d-flex flex-column flex-shrink-0">
            <?php get_nav() ?>

            <div class="mb-auto page-content p-3">