<!DOCTYPE html>
<html>
        <head>
        <title>Form2 PHP</title>
        </head>
<body>
        <section>
                Selection:<br>
                <?php
                $color = $_GET["shirt_color"];
                $size = $_GET["shirt_size"];
                $shirt_print = $_GET["shirt_print"];
                $stock = 15;

                if ($color != "red") 
                        echo "This color is not in stock!";
                else
                        echo "Color is red.</h3>";
                echo "<br>";

                echo "<h3>shirt size is " . $size . "</h3>";
                echo "<br>";

                echo "<h3>Text to print is: " . $shirt_print . "</h3>";
                echo "<br>";

                if ($stock < 1)
                        echo "<h3>Product out of stock.</h3>";
                else
                        echo "<h3>Product in stock</h3>";
                ?>
        </section>
        <footer>
        </footer>
</body>
</html>