<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$card =
    [
       [ 'url' => 'https://images.pexels.com/photos/462118/pexels-photo-462118.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'alt' => 'Flowers',
        'text' => 'Flowers are a very popular way to express one’s love and affection, which is why they play an important role in Valentine’s Day gifting. Red roses, orchids and myrtle flowers are some of the best gifts to give on Valentine’s Day because they represent love and romance. So, to stand out from the rest, why not accompany your flowers with a flower quote or pun? Flower quotes and puns are a fun and unique way to show your Valentine just how much you care, without breaking the bank.',
        ],
        [ 'url' => 'https://images.pexels.com/photos/210019/pexels-photo-210019.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
            'alt' => 'car',
            'text' => 'With Car Text Check you can check the reg of any mainland GB registered vehicle, including whether it is written-off, accident damaged, scrapped, stolen, number of keepers, colour change, date first registered and of course make, model and vehicle identity.',
        ],
        [ 'url' => 'https://images.pexels.com/photos/145939/pexels-photo-145939.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
            'alt' => 'Tiger',
            'text' => 'Tigers are the largest felines in the world and as such, many cultures consider the tiger to be a symbol of strength, courage and dignity. The tiger is one of the twelve Chinese zodiac animals, and those born in the "Year of the Tiger" are thought to be brave, competitive and self-confident.',
        ],
    ];
?>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap-grid.css">
	<title></title>
    <style>
    .card{
        width: 30%;
    }
        .img{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container d-flex align-content-center justify-content-between">
        <?php foreach ($card as $value):?>
        <div class="card">
            <img class="img" src="<?php print $value['url'];?>" alt="<?php print $value['alt']?>">
            <p><?php print $value ['text']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>