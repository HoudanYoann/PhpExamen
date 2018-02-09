<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>convertisseur argent</title>
    <meta name="description" content="">
</head>
<body>


<h3>Convertisseur Euro en USD</h3>

<form action="convert.php" method="POST" name="form1">
    <input type="text" name="valeur" id="valeur">
    <input type="submit" name="validate" value="Envoyer">
</form>
<br>

<?php

if (isset($_POST['validate'])) {
    $valeur = ($_POST['valeur']);


// Je rajoute un arrondi au décimal pour une question de lisibilité
    echo 'La somme de : ' . $_POST['valeur'] . '<strong> EURO(S)</strong> est égale à : ' . number_format($valeur / 0.92083999023, 4, ".", " ") . " " . "<strong>USD</strong>";
}

?>

</body>
</html>