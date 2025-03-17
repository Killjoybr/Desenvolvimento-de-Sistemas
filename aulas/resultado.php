<?php
    declare(strict_types=1);
    
    function teste(string $string, string $numero): void {
        if ($string == NULL) {
            $string = '';
        }
        echo "<h2 style='color: red'>" . $string . "</h2>";
        echo "<br><br>";
        echo "Idade do user é: " . $numero;
    }

    teste($_GET["texto"], $_GET["idade"]);
?>