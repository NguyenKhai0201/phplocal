<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Vẽ bàn cờ bằng PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    <div class="mt-5 ml-5">
    <table class="border border-dark">
        <?php
        for($i=1;$i<=8;$i++)
        {
            echo "<tr>";
            for($j=1;$j<=8;$j++)
            {
                $total=$i+$j;
                if($total%2 == 0)
                {
                    echo "<td class='bg-light p-4'></td>";
                }
                else
                {
                    echo "<td class='bg-dark p-4'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    </div>
    </body>
    </html>
