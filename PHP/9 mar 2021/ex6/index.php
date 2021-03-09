<DOCTYPE html>
    <html lang="en">
        <head>
            <title>ex6</title>
            <meta charset="utf-8">
        </head>
        <body>
        <?php
            $n="50";
            for($i=1;$i<=$n;$i++){
                $array=array('$i');
                $comma = implode("-",$array);
                echo $comma;
            }
        ?>
        </body>
    </html>
