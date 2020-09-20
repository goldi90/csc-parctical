<?php
date_default_timezone_set("Asia/Calcutta");
$hour =date("h:i");

if ($hour > 19 or $hour < 4) {
                $bg= '#f55742';
        } elseif ($hour > 10) {
                $bg= '#4242f5';
        } else {
              $bg= '#fcba03';
        }

// if ($time<=10) {
//   $bg= '#f55742';
// }
// elseif ($time<=12) {
//   // code...
// }
// else {
//   $bg= '#4242f5';
// }

 ?>





 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
<style>
     body {
        background: <?php echo $bg; ?>;
    }
    </style>
   </head>
   <body>
     <h1>time is <?php echo date("h:i");?> </h1>
   </body>
 </html>
