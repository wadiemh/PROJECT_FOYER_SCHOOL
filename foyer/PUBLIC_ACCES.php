<?php
    // Fichier � acc�s r�serv� aux ADmin

    session_start(); // on commence toujours par l�

    // Droits de la personne suffisants ?
    if (!isset($_SESSION["droits"]))
    {
        die("<strong>Acc�s r�serv� aux personnes enregistr�es.</strong>");
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
    <p> Vous �tes connect� en tant que <?php echo $_SESSION["NAME"]; ?>.</p>

    <p> ... des infos persos ... </p>

</body>
</html>