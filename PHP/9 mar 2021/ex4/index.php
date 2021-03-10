<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>ex4</title>
            <meta charset="utf-8">
        </head>
        <body>
        <?php
            $sum=0;
            for($i=1;$i<=100;$i++){
                $sum +=$i;
            }
            echo "Tổng các số nguyên tố đầu tiên là: " .$sum."<br>";
            echo "Tổng bình phương 100 số nguyên đầu tiên là: ".($sum/100);
        ?>
        </body>
    </html>
