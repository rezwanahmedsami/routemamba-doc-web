<?php
   if (isset($_GET['route'])) {
      switch ($_GET['route']) {
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
