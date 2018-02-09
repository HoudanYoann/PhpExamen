<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
$naissance = date_create('12-02-1995 10:46:07');
$date1 = date('Y-m-d'); // Date du jour


$tableau = array(
    'Nom' => 'Houdan Yoann',
    'Adresse' => 'La Fosse aux moines',
    'Code Postal' => '76590',
    'Ville' => 'Sainte-Foy',
    'Email' => '16976@csmrouen.net',
    'Téléphone' => '0638386847',
);

foreach( $tableau as $key => $value )
    // On affiche les clés avec $key et les valeurs avec $value sauf $naissance car cela engendre une érreur
    echo  '[' . $key . ']' . " " . $value . '<br />';
// On fait donc 2 nouvels écho concernant la date de Naissance ainsi qu'un DatTime en français
echo '[' . 'Date de naissance' . '] ';
echo date_format($naissance, 'd-m-Y');
?>

