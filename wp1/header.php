<?php $weblink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <title>DKlog Blogs Tema</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
</head>
<body>

<!-- Üst Menü start -->
<nav class="navbar navbar-default">
  <div class="container container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/wp1/">DKlog</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="<?php echo ($weblink=='http://udemy.akademiksuur.com/wp1/'?'active':''); ?>"><a href="/wp1/">AnaSayfa</a></li>
        <li class="<?php echo (strpos($weblink, '/wp1/hakkinda')==true?'active':''); ?>"><a href="/wp1/hakkinda/">Hakkında</a></li>
        <li class="<?php echo (strpos($weblink, '/wp1/blogs')==true?'active':''); ?>"><a href="/wp1/blogs/">Blogs</a></li>
        <li class="<?php echo (strpos($weblink, '/wp1/iletisim')==true?'active':''); ?>"><a href="/wp1/iletisim/">İletişim</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a target="_blank" href="https://facebook.com"><span class="fab fa-facebook-f"></span></a></li>
        <li><a target="_blank" href="https://twitter.com"><span class="fab fa-twitter"></span></a></li>
        <li><a target="_blank" href="https://youtube.com"><span class="fab fa-youtube"></span></a></li>
        <li><a target="_blank" href="https://instragram.com"><span class="fab fa-instagram"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Üst Menü finish -->