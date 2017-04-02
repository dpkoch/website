<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php if (!empty($page_title)) {echo $page_title . ' | '; } ?>Daniel P Koch</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,300,600' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/styles/normalize.css">
  <link rel="stylesheet" href="/styles/main.css">
  <?php if (!empty($header_css)) { echo '<link rel="stylesheet" href="' . $header_css . '">'; } ?>

  <!-- JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php if (!empty($header_js)) { echo $header_js . PHP_EOL; } ?>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <meta name="theme-color" content="#0f3093">

</head>
<body>

  <!-- Page Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="band header">
    <header>

      <a href="/" class="site-title">
        <svg viewBox="0 0 360 360" xmlns="http://www.w3.org/2000/svg" width="360" height="360" version="1.1"><path d="M0 0L0 150 257.2 0 0 0zM360 0L51.4 180 360 360 360 0zM0 210L0 360 257.2 360 0 210z"/></svg>
        <h1>Daniel P Koch</h1>
      </a>

      <button class="menu-button"><?php include($_SERVER['DOCUMENT_ROOT'] . '/images/hamburger.svg'); ?></button>

      <nav class="">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about/">About</a></li>
          <li><a href="/resume/">Resume</a></li>
          <li><a href="/portfolio/">Portfolio</a></li>
          <li><a href="/blog/" class="nav-external">Blog</a></li>
        </ul>
      </nav>

      <?php if (!empty($page_heading)) { echo '<div class="page-title"> <h2>' . $page_heading . '</h2> </div>'; } ?>

    </header>
  </div>

  <?php if (!empty($header_extra)) { echo $header_extra . PHP_EOL; } ?>

  <div class="band main">
    <main>

<!--Begin Main Content-->
