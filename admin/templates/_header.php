<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>
    <link href="http://localhost/project_blk/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="<?= $icon ?>">
    <link rel="stylesheet" href="http://localhost/project_blk/admin/node_modules/main.css">
    <link rel="stylesheet" href="http://localhost/project_blk/libs/fonts/css/font-awesome.min.css">
    <link href="http://localhost/project_blk/admin/node_modules/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
    <style>
      body{
        overflow-x: hidden;
      }
    </style>

  </head>

  <body onload="enableEditMode()">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/project_blk/admin/">Admin Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./">Dashboard</a></li>
            <li><a href="#"><?= $_SESSION['login'] ?></a></li>
            <li><a href="./logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>