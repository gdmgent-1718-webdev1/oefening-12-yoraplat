<?php
    $cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];
    sort($cities);
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Order Array</title>
    </head>

    <body>
        <ol>

            <?php
                foreach ($cities as $value){
                    $value = strtoupper($value);
                    echo "<li>" . $value . "</li>";
                }
        ?>
        </ol>
    </body>

    </html>
