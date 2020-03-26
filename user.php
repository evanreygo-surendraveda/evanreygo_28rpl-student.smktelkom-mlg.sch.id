<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perpustakaan Moklet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    <style media="screen">
    .header {
background: url(library_3.jpg) center center fixed;
color: #fff;
height: 100vh;
position: relative;
background-size: cover;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
-msn-background-size: cover;
}
.header .overlay {
background: rgba(0, 0, 0, 0.58);
width: 100%;
height: 100%;
position: absolute;
top: 0;
left: 0;
}

.header .navbar-default {
background-color: transparent !important;
border-color: transparent;
background-image: none;
box-shadow: none;
}
.header .navbar-default .navbar-brand {
font-size: 30px;
font-weight: bold;
color: #fff;
}

.header .navbar-default .navbar-nav > li > a {
font-size: 20px;
color: #fff;
border-bottom: 1px solid transparent;
}
.header .navbar-default .navbar-nav > li:hover a {
color: #333;
border-bottom: 1px solid #fff;
}

.header .navbar-toggle {
margin: 10px 0;
background: #36c;
color: #fff;
}

.welcome {
  font-weight: normal;
  letter-spacing: 0.1em;
  text-align: center;
  margin: 0;
  padding: 0.3em 0;
}

.font{
  font-family: 'Baloo Thambi 2', cursive;
}

    </style>

  </head>

  <body class="font">

    <section class="header">
  <div class="overlay">
    <div class="row">
      <div class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navlogo col-lg-2">
              <a class="navbar-brand" href="user.php">Perpustakaan</a>
            </div>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="col-lg-8">
              <ul class="nav navbar-nav nav-links">
                <li><a href="../buku_untuk_anggota/tampil_buku.php">List Buku</a></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </div>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <div class="col-lg-9 right">
              <ul class="nav navbar-nav navbar-right">
                <h1 class="welcome">selamat datang di perpustakaan moklet</h1>
                <h2 class="welcome">let your dream come true</h2>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  </body>
</html>
