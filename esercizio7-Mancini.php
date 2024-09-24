<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
        $x = rand(1,40);
        $y = rand(1,40);
        $max;
        if ($x>$y) {
            echo "<h1> $x è maggiore di $y </h1>";
            $max = $x;
        }elseif ($x == $y){
            echo "<h1> $x è uguale a $y </h1>";
            $max = $x;
        }else{
            echo "<h1> $x è minore di $y </h1>";
            $max = $y;
        }

        if ($max <10) {
            echo "<h1> $max minore di 10 </h1>";
        } elseif ($max >= 10 && $max <= 20){
            echo "<h1> $max compreso tra 10 e 20 </h1>";
        } elseif ($max >= 21 && $max <= 30){
            echo "<h1> $max compreso tra 21 e 30 </h1>";
        } else {
            echo "<h1> $max è maggiore di 30 </h1>";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>