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
                if (strlen($name) > 3 ) {
                    echo "nome inserito correttamente";
                } else {
                    echo "il nome inserito non rispetta le condizioni di lunghezza";
                }
              ?>
         </div>
     </body>
 </html>
