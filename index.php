<!doctype html>
<html>
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta>

      <?php
        $route = basename($_SERVER['PHP_SELF']);
            switch ($route) {
              case 'index.php':
                  $title = 'Routemamba - a javascript library.';
                  break;
              case 'doc.php':
                    $title = 'Routemamba Documentation';
                  break;
              default:
              $title = 'Routemamba - a javascript library.';
              break;
            }
        
      ?>
      <title><?= $title ?></title>
      <meta name="title" content="<?= $title ?>">
      <meta name="description" content="Routemamba is a js library to develop single page web applications easily, specially for php webapp. ">
      <meta name="keywords" content="routemamba, Route mamba, route mamba, javascript library, routemamba js, Reactive appplication, react js, next js, single page web app">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="English">
      <meta name="revisit-after" content="1 days">
      <meta name="author" content="Routemamba">

      <!-- Open Graph / Facebook -->
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://routemamba.com/">
      <meta property="og:title" content="<?= $title ?>">
      <meta property="og:description" content="Routemamba is a js library to develop single page web applications easily, specially for php webapp. ">
      <meta property="og:image" content="https://routemamba.com/images/web-rm-banner.png">

      <!-- Twitter -->
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:url" content="https://routemamba.com/">
      <meta property="twitter:title" content="<?= $title ?>">
      <meta property="twitter:description" content="Routemamba is a js library to develop single page web applications easily, specially for php webapp. ">
      <meta property="twitter:image" content="https://routemamba.com/images/web-rm-banner.png">
    
      </meta>

      <script src="./js/routemamba.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/railscasts.min.css">
      <link rel="stylesheet" href="scribbler-global.css">
      <link rel="author" href="humans.txt">
  </head>
  <body>

    <section id="header_load">
      <?php include "./components/header-footer/header.php"; ?>
    </section>
    <section id="root">
    <?php include "./components/index.php"; ?>
    </section>
    <section id="footer_load">
    <?php include "./components/header-footer/footer.php"; ?>
    </section>
    
    <script src="./js/app.js"></script>
  </body>
</html>