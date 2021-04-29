<?php
    $partite = array(
        array(
            'homeTeam' => 'Salernitana',
            'teamAway' =>'Napoli',
            'score_homeTeam' => rand(0, 100),
            'homeTeam_teamAway' => rand(0, 100)
        ),
        array(
            'homeTeam' => 'Brescia',
            'teamAway' =>'Livorno',
            'score_homeTeam' => rand(0, 100),
            'homeTeam_teamAway' => rand(0, 100)
        ),
        array(
            'homeTeam' => 'Padova',
            'teamAway' =>'Milano',
            'score_homeTeam' => rand(0, 100),
            'homeTeam_teamAway' => rand(0, 100)
        ),
        array(
            'homeTeam' => 'Como',
            'teamAway' =>'Manfredonia',
            'score_homeTeam' => rand(0, 100),
            'homeTeam_teamAway' => rand(0, 100)
        ),
        array(
            'homeTeam' => 'Palermo',
            'teamAway' =>'Bari',
            'score_homeTeam' => rand(0, 100),
            'homeTeam_teamAway' => rand(0, 100)
        )
    );

    foreach ($partite as  $partita) {
        echo $partita['homeTeam'].' - '.$partita['teamAway'];
        echo '  ';
        echo $partita['score_homeTeam']. ' | '.$partita['homeTeam_teamAway'];
        echo "<br><br><br>";
    }
?>
