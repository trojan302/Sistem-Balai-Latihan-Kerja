<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website Balai Latihan Kerja Pemkab Magelang, Didedikasikan untuk memudahkan masyarakat mengakses informasi dari Balai Latihan Kerja Pemkab Magelang">
    <meta name="author" content="">

    <title>Balai Latihan Kerja | PEMKAB Magelang</title>
    <link rel="icon" href="http://localhost/project_blk/libs/photos/icon_blk.png">
    <link href="http://localhost/project_blk/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/project_blk/libs/fonts/css/font-awesome.min.css">
    <link href="./libs/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./">
                <img src="./libs/photos/icon_blk.png" alt="Balai Latihan Kerja" class="pull-left" style="width:20px;height:23px;"> &nbsp; <span class="small">Balai Latihan Kerja</span>
              </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="./"><i class="glyphicon glyphicon-home"></i>&nbsp; Beranda</a>
                </li>
                <li>
                  <a href="./profil"><i class="glyphicon glyphicon-info-sign"></i>&nbsp; Profil</a>
                </li>
                <li>
                  <a href="./contact"><i class="glyphicon glyphicon-phone-alt"></i>&nbsp; Kontak Kami</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lainnya <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="./kejuruan"><i class="glyphicon glyphicon-flash"></i>&nbsp; Kejuruan</a>
                    </li>
                    <li>
                      <a href="./materi"><i class="glyphicon glyphicon-book"></i>&nbsp; Materi Instruktur</a>
                    </li>
                    <li>
                      <a href="./logout"><i class="glyphicon glyphicon-ok-sign"></i>&nbsp; Logout</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Info</li>
                    <li>
                      <a href="./loker"><i class="glyphicon glyphicon-bookmark"></i>&nbsp; Loker</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="./dashboard">
                  <i class="glyphicon glyphicon-user"></i>&nbsp; <?= $peserta['nama']; ?></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
