
<?php

    //inclusions
    require_once '_inc/header.php';
    // require_once '_inc/nav.php';
    require_once '_inc/functions.php';

?>

<h1>Every games</h1>

<?php

    $games = GetAllGames();
    // Parcours du tableau des jeux
    foreach ($games as $key) {

    echo $key['title'];
    echo " (".$key['price']."€)". "<br>";
    echo "<img src='".$key['poster']."' width='100px' height='125px'>" . "<br>";
    echo $key['description'] . "<br>";
    echo $key['release_date'] . "<br>";
    echo "<a href=game.php >Consulter</a>". "<br>";
    echo "<br>";
}

    //inclusions
    require_once '_inc/footer.php';


?>