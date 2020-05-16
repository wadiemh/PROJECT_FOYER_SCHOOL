<?php
    // Fichier à accès réservé aux ADmin

    session_start(); // on commence toujours par là

    // Droits de la personne suffisants ?
    if (!isset($_SESSION["droits"]))
    {
        die("<strong>Accès réservé aux personnes enregistrées.</strong>");
    }
    if ($_SESSION["droits"]!="public")
    {
        die("<strong>welcome!!.</strong>");
    }
	//echo $_GET["NAME"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

</head>

<body  class="container">

    <h1> Informations personnelles </h1>
    <p> Vous êtes connecté en tant que <?php echo $_SESSION["NAME"]; ?>.</p>

    <p> ... des infos persos ... </p>

</body>
</html>