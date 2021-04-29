<!-- Jsnack 1 DATE-->
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


    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = (int) $_GET['age'];
    $auth = "Inserisci la mail";


?>


<!-- Jsnack 2 DATE-->

<div style="display: flex; justify-content: space-around;">

    <div style="background-color: cyan; color: black; width: 300px;">
        <h1>Jsnack 1</h1>
        <?php
        foreach ($partite as  $partita) {
            echo
                $partita['homeTeam'].' - '.$partita['teamAway'].'  '.
                $partita['score_homeTeam']. ' | '.$partita['homeTeam_teamAway'];
            echo
                "<br><br><br>";
        }?>
    </div>


    <div style="background-color: cyan; color: black; width: 300px;">
        <h1>Jsnack 2</h1>
        <?php
            if (strlen($name) > 3 &&
                strpos($mail,".") > 0 &&
                strpos($mail,"@") > 0 &&
                is_int($age)){
                $auth = "Accesso riuscito";
                echo $auth;

            }else {
                $auth = "Accesso negato";
                echo $auth;
            }
        ?>
    </div>
</div>
