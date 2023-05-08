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

/* var_dump($hotels); */

$filteredHotels = [];

if(!empty($_GET['parking'])){
    $parking = ($_GET['parking'] == 'si') ? true : false;
    foreach($hotels as $hotel){
        if($hotel['parking'] === $parking) {
            $filteredHotels[] = $hotel;
        }
    }
} else {
    $filteredHotels = $hotels;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Hotel App</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="title d-flex justify-content-between">
                <h1 class="px-3">Hotels List</h1>
                <form class="row" action="" method="GET">
                    <div class="col">
                        <select name="parking" id="" class="form-control">
                            <option value="">All</option>
                            <option value="si">Parking</option>
                            <option value="si">No Parking</option>
                        </select>
                    </div>
                    <!-- <div class="col">
                        <select name="parking" id="" class="form-control">
                            <option value="">All</option>
                            <option value="1">Parking</option>
                            <option value="2">Parking</option>
                            <option value="3">Parking</option>
                            <option value="4">Parking</option>
                            <option value="5">Parking</option>
                        </select>
                    </div> -->
                    <div class="col">
                        <button class="btn btn-success">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <main>
        <ul>
            <?php foreach ($filteredHotels as $hotel) { ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Parking</th>
                            <th scope="col">Vote</th>
                            <th scope="col">Distance to center</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $hotel['name'] ?>
                            </td>
                            <td>
                                <?php echo $hotel['description'] ?>
                            </td>
                            <td>
                                <?php echo $hotel['parking'] ?>
                            </td>
                            <td>
                                <?php echo $hotel['vote'] ?>
                            </td>
                            <td>
                                <?php echo $hotel['distance_to_center'] ?>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
        </ul>
    </main>
</body>

</html>