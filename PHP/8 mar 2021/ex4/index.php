<DOCTYPE html >
    <html lang="">
    <head>
        <title>ex4</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $Ma="EV2009";
            $PLU="Tấm hợp kim nhôm ngoài trời EV2009";
            $amount="160000";
            $application="500";
            $VAT="0.05";
            echo "Mã sản phẩm: " . $Ma. "<br/>";
            echo "Tên sản phẩm: " .$PLU. "<br/>";
            echo "Giá sản phẩm chưa trừ VAT: " .$amount*$application ."<br/>";
            echo "Giá sản phẩm trừ VAT: " .(($amount*$application)+($amount*$application*$VAT));
        ?>
    </body>
    </html>
