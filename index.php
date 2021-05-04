
<?php
    // Jsnack 1 DATE
    $partite = [
        [
            'homeTeam' => 'Salernitana',
            'teamAway' =>'Napoli',
            'score_homeTeam' => rand(0, 100),
            'homeTeam_teamAway' => rand(0, 100)
        ],
        [
            'homeTeam' => 'Brescia',
            'teamAway' =>'Livorno',
            'score_homeTeam' => rand(0, 100),
            'homeTeam_teamAway' => rand(0, 100)
        ],
        [
            'homeTeam' => 'Padova',
            'teamAway' =>'Milano',
            'score_homeTeam' => rand(0, 100),
            'homeTeam_teamAway' => rand(0, 100)
        ],
        [
            'homeTeam' => 'Como',
            'teamAway' =>'Manfredonia',
            'score_homeTeam' => rand(0, 100),
            'homeTeam_teamAway' => rand(0, 100)
        ],
        [
            'homeTeam' => 'Palermo',
            'teamAway' =>'Bari',
            'score_homeTeam' => rand(0, 100),
            'homeTeam_teamAway' => rand(0, 100)
        ]
    ];

    // Jsnack 2 DATE
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    $auth = "Inserisci la mail";


    // Jsnack 3 DATE
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    // Jsnack 4 DATE
    $classe28 = [
        [
            'nome' => 'Francesco',
            'cognome' => 'Sica',
            'voti' => [3,3,3,3,3,3,3,3,3,3]
        ],
        [
            'nome' => 'Michele',
            'cognome' => 'Papagni',
            'voti' => [3,2,3,1,3,3,2,3,1,3]
        ],
        [
            'nome' => 'Andrea',
            'cognome' => 'Sessa',
            'voti' => [1,3,1,3,3,2,3,3,2,3]
        ],
        [
            'nome' => 'Giovanni',
            'cognome' => 'Lucibelli',
            'voti' => [3,2,3,2,3,1,1,3,3,1]
        ],
        [
            'nome' => 'Agostino',
            'cognome' => 'Menna',
            'voti' => [2,1,3,3,1,3,1,3,3,1]
        ],
    ];
?>


<div style="display: flex; justify-content: space-around;">

    <!-- Jsnack 1 -->
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

    <!-- Jsnack 2 DATE -->
    <div style="background-color: cyan; color: black; width: 300px;">
        <h1>Jsnack 2</h1>
        <?php
            if (strlen($name) > 3 &&
                strpos($mail,".") &&
                strpos($mail,"@") &&
                is_numeric($age)){

                $auth = "Accesso riuscito";
                echo 'email : '.$mail.'<br><br><br>'.$auth;
                // echo $auth;

            }elseif (strlen($mail) == false) {
                echo $auth;
            }else {
                $auth = "Accesso negato";
                echo $auth;
            }
        ?>
    </div>

    <!-- Jsnack 3 DATE -->
    <div style="background-color: cyan; color: black; width: 300px;">
        <h1>Jsnack 3</h1>
        <?php
            foreach ($posts as $date => $posts_by_date) {
                echo $date."<br><br>";

                for ($i=0; $i < count($posts_by_date); $i++) {
                    $post = $posts_by_date[$i];
                    echo $post['title']."<br><br>".$post['author']."<br><br>".$post['text']."<hr>";
                }
                echo "<br><br><br>";
            }
        ?>
    </div>

    <!-- Jsnack 4 DATE -->
    <div style="background-color: cyan; color: black; width: 300px;">
        <h1>Jsnack 4</h1>
        <?php

            for ($i=0; $i < count($classe28); $i++) {
                $media = array_sum($classe28[$i]['voti']) / count($classe28[$i]['voti']);
                echo $classe28[$i]['nome']." ".$classe28[$i]['cognome']." media : ".$media."<hr>";
            }
        ?>
    </div>
</div>
