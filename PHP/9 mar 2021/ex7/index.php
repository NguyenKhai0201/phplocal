<DOCTYPE html>
    <html lang="en">
    <head>
        <title>Vẽ bàn cờ bằng PHP</title>
        <link rel="stylesheet" href="./css.css">
    </head>
    <body>
    <div class="center">
    <table width="270px" border="1px">
        <?php
        for($i=1;$i<=8;$i++)
        {
            echo "<tr>";
            for($j=1;$j<=8;$j++)
            {
                $total=$i+$j;
                if($total%2 == 0)
                {
                    echo "<td class='white'></td>";
                }
                else
                {
                    echo "<td class='black'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    </div>
    </body>
    </html>
