<DOCTYPE html>
    <html lang="en">
        <head>
            <title>ex5</title>
            <meta charset="utf-8">
        </head>
        <body>
        <?php
            $kw="1100";
            if($kw<=100){
                echo "Tiền điện: " .$kw*450;
            }
            if(100<$kw&&$kw<=200){
                echo "Tiền điện: " .$kw*600;
            }
           if(200<$kw&&$kw<=300){
               echo "Tiền điện: " .$kw*750;
        }
           if(300<$kw&&$kw<=500){
               echo "Tiền điện: " .$kw*900;
        }
           if(500<$kw&&$kw<=1000){
               echo "Tiền điện: " .$kw*1000;
        }
           if($kw>1000){
               echo "Tiền điện: "  .$kw*1200;
        }
        ?>
        </body>
    </html>



