<?php


    
        for ($i=0; $i < 200; $i++) { 
            $pin = rand(100000000000,900000000000);
            $serial_no = rand(100000000000000, 900000000000000);
            echo "<div class='card_block'>";
            echo "Recharge Card PIN: " . $pin . "<br>";

            echo "Serial No: " . $serial_no . "<br>";

            echo "</div>";
            
        }



    ?>
