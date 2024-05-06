<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

   for($i = 0; $i < count($hotels); $i++){

        $hotel =  $hotels[$i];
        $hotel_name = $hotel['name'];
        $hotel_description = $hotel['description'];
        $hotel_parking = $hotel['parking'];
        $hotel_rate = $hotel['vote'];
        $hotel_distance = $hotel['distance_to_center'];     
        ?>
        
       <span>Nome Hotel :</span> <?php  echo  $hotel_name; ?>
       <span>Descrizione :</span> <?php echo $hotel_description; ?>
       <span>Parcheggio :</span> <?php echo $hotel_parking; ?>
       <span>Voto :</span><?php echo $hotel_rate; ?>
       <span>Distanza dal centro :</span> <?php echo $hotel_distance;
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Hotel</title>
</head>
<body>
</body>
</html>