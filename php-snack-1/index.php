<?php
    $matches = [
        [
            'squadra-casa' => 'Olimpia Milano',
            'squadra-ospite' => 'Fortitudo',
            'punti-squadra-casa' => 103,
            'punti-squadra-ospite' => 98
        ],
        [
            'squadra-casa' => 'Padova',
            'squadra-ospite' => 'Virtus Bologna',
            'punti-squadra-casa' => 70,
            'punti-squadra-ospite' => 90
        ],
        [
            'squadra-casa' => 'Teramo',
            'squadra-ospite' => 'Rieti',
            'punti-squadra-casa' => 65,
            'punti-squadra-ospite' => 60
        ],
        [
            'squadra-casa' => 'Trento',
            'squadra-ospite' => 'Bari',
            'punti-squadra-casa' => 95,
            'punti-squadra-ospite' => 85
        ]
    ];

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
                 for($i = 0; $i < count($matches); $i++) {
                     echo "<h2>Match:</h2>";
                     echo ('<p>');
                     echo $matches[$i]['squadra-casa'] . ' vs ' . $matches[$i]['squadra-ospite'] . ' = ' . $matches[$i]['punti-squadra-casa'] . ' - ' . $matches[$i]['punti-squadra-ospite'];
                     echo ('</p>');
                 }
              ?>
         </div>
     </body>
 </html>
