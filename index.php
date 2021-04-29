<?php
    $partite = array(
        array(
            'Salernitana' => rand(0, 100),
            'Napoli' =>rand(0, 100)
        ),
        array(
            'Brescia' => rand(0, 100),
            'Livorno' => rand(0, 100)
        ),
        array(
            'Padova' => rand(0, 100),
            'Milano' => rand(0, 100)
        ),
        array(
            'Como' => rand(0, 100),
            'Manfredonia' => rand(0, 100)
        ),
        array(
            'Palermo' => rand(0, 100),
            'Bari' =>  rand(0, 100)
        )
    );

    foreach ($partite as  $partita) {
        $dash = 0;
        foreach ($partita as $squadra => $punti) {
            echo $squadra;

            if ($dash == 0) {
                echo ' - ';
                $dash++;
            }else {
                echo ' | ';
                $dash = 0;
            }
        }
        foreach ($partita as $squadra => $punti) {
            echo $punti;
            if ($dash == 0) {
                echo ' - ';
                $dash++;
            }else {
                $dash = 0;
            }
        }
        echo "<br><br><br>";
    }
?>
