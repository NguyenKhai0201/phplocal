<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>ex2</title>
            <meta charset="utf-8">
        </head>
        <body>
        <?php
        $sum="0";
            for($i=1;$i<=50;$i++){
                echo $i.", ";
                $sum+=$i;
            }
            echo "<br>"."<br>";
            echo "Trung Bình Cộng: ".($sum/50);
            echo "<br>"."<br>";
            echo "Giá trị max-min: "."<br>";

        ?>
        </body>
    </html>
