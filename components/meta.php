<?php
   if (isset($_GET['route'])) {
      switch ($_GET['route']) {
         case 'index.php':
            $title = 'Routemamba - a javascript library to develop single page web application by raw coding.';
            break;
         case 'doc.php':
               $title = 'Routemamba Documentation - a code documentation for routemamba';
            break;
         default:
         $title = 'Routemamba - a javascript library to develop single page web application by raw coding.';
         break;
      }
   }
?>
<title><?= $title ?></title>
<meta name="description" content="">