<?php
if(isset($_POST["formulaire"])) {

    // Vérification dans un tableau avec print_r très important pour nos vérifications

    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    $tabErreur = array();

    $title      = $_POST['title'];
    $actor      = $_POST['actor'];
    $director   = $_POST['director'];
    $producer   = $_POST['producer'];;
    $storyline  = $_POST['storyline'];
    $video      = $_POST['video'];

    if($_POST["title"] == "")
        array_push($tabErreur, "Veuillez saisir votre Titre de film");

    if($_POST["actor"] == "")
        array_push($tabErreur, "Veuillez saisir les acteurs du film");

    if($_POST["director"] == "")
        array_push($tabErreur, "Veuillez saisir le directeur");

    if($_POST["producer"] == "")
        array_push($tabErreur, "Veuillez saisir le producteur");

    if($_POST["storyline"] == "")
        array_push($tabErreur, "Veuillez saisir une description du film");

    if($_POST["video"] == "")
        array_push($tabErreur, "Veuillez saisir une URL du film");

    if(count($tabErreur) != 0) {
        $message = "<ul>";

        for($i = 0 ; $i < count($tabErreur) ; $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }

        $message .= "</ul>";
        echo($message);

        include("./formFilms.php");
    }

    else {
        $connexion = mysqli_connect("localhost", "root", "", "exercice_3");

        if (!$connexion) {
            die("Erreur MySQL " . mysqli_connect_errno() . " : " . mysqli_connect_error());
        }

        else {
            $requete = "INSERT INTO movies (ID, title, actors, director, producers, storyline,video)
                        VALUES (NULL, '$title', '$actor', '$director', '$producer', '$storyline', '$video')";


            echo ("<script>redirection(\"../ListeFilms.php\");</script>
                    Votre film a été ajouté, cliquez <a href=\"./ListeFilms.php\">ici</a> pour voir les films disponible");
            

            mysqli_query($connexion, $requete);
            mysqli_close($connexion);
        }

    }
}

else {
    echo("Je viens d'ailleurs");
    include("./formFilms.php");
}