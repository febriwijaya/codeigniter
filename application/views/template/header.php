<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Poppins&display=swap" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets'); ?>/css/style.css" rel="stylesheet">
  <link href="<?= base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style>
    .cursive {
      font-family: 'Lemonada', cursive;
    }

    .kecil {

      width: 40px;
      height: 40px;
    }

    .jumbotronx {
      background-image: url(asets/images/gelombang.png);
      height: 650px;
      width: 100%;
      background-size: cover;
      text-align: center;
      margin-left: -30px;
      position: relative;
    }

    .tombol {
      z-index: 1;
      position: relative;
    }

    .jumbotronx::after {
      content: '';
      display: block;
      width: 100%;
      height: 80%;
      position: absolute;
      bottom: 0;
    }

    .header {
      font-family: 'Lobster',
        cursive;
      font-family: 'Poppins',
        sans-serif;
      font-weight: 600;
      font-size: 60px;
      line-height: 70px;
      text-align: left;
    }

    .paragraph {
      font-family: 'Open Sans',
        sans-serif;
      font-size: 20px;
      line-height: 30px;
      text-align: left;
    }

    .gambar-kanan {
      height: 650px;
      margin-right: -110px;
      width: 100%;
    }

    @media (max-width: 767.98px) {
      .width {
        width: 100%;
        padding: 0;
        margin: 0;
      }

      .hilang {
        display: none;
      }
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">