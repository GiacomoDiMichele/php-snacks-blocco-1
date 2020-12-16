<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>
         <div class="">
             <?php
                if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !==false && (is_numeric($age) !== false)) {
                    echo "accesso riuscito";
                } else {
                    echo "accesso negato";
                }
              ?>
         </div>
     </body>
 </html>
