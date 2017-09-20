<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#0288d1">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/vendor.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/easyschool.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/login.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/signup.min.css">
  </head>
  <body>
    <?php $this->load->view($body); ?>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/vendor.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/easyschool.min.js"></script>
</html>