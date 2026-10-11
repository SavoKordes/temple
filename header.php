<?php
  /* $pageTitle sollte VOR dem include gesetzt werden, z.B.:
     $pageTitle = "Impressum - ISKCON München";
     include 'header.php'; */
  if (!isset($pageTitle)) {
      $pageTitle = "ISKCON München - Sri Sri Gaura Nitai";
  }
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="style.css">
  <!-- Google Fonts für schöne Typografie -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- HEADER & LOGO/WAPPEN -->
  <header class="site-header">
    <div class="header-content container">
      <div class="logo-wrapper">
        <a href="index.php">
          <img src="images/iskcon.png" alt="ISKCON München Wappen" class="logo-img">
        </a>
      </div>
      <div class="header-text">
        <h1><a href="index.php" class="header-home-link">ISKCON München</a></h1>
        <p class="subtitle">Sri Sri Gaura Nitai Tempel</p>
      </div>
    </div>

    </header>

  <main class="container">
