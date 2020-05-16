
<?php
    session_start();
	require_once 'db.php'; // fichier qui contient l'instanciation d'un objet PDO

    // pas de login ou pas de pass : on ne devrait pas être là
    if (!isset($_GET["NAME"]) || !isset($_GET["PASS"]))
    {
        header("location:showusers.php"); // redirection vers l'accueil, sans message
        exit(); // indispensable : définir un champ de l'entête n'interrompt pas le script
    }
	
	// Création du texte de la requête
	$txtReq  = " Select droits  from utilisateur  where upper(login)=upper(:zeLogin) and pass=:zePass; " ;
	//$txtReq .= " from utilisateur ";
	//$txtReq .= " where upper(login)=upper(:zeLogin) and pass=:zePass; ";
	
	// Préparation
	$req = $pdo->prepare($txtReq);
	$req->bindParam(":zeLogin",$identifiant);
	$req->bindParam(":zePass" ,$mdp);
	
	// Exécution
	$identifiant = $_GET["NAME"];
	$mdp = $_GET["PASS"];
	$_SESSION["NAME"]=$identifiant;
	//var_dump ($identifiant);
	//var_dump ($mdp);
	$req->execute();

	// Récupération des données dans un tableau associatif
	$tabRes = $req->fetchAll(PDO::FETCH_ASSOC);
	$a = true;
	var_dump ($a);
	var_dump ($tabRes);
	// Exploitation du résultat
	if (count($tabRes)==1) // une ligne : c'est OK  // IF fetchall renvoie un resultat
	{
	$ligneRes = $tabRes[0];// stockage de la premiere ligne
        $_SESSION["login"] = $_GET["login"];
        $_SESSION["droits"] = $ligneRes["droits"]; // affectation des droits
        header("location:comand.php");
        exit();
    }
    else
    {
        // redirection vers l'accueil, en passant un message en GET
        header("location:inscription.php?message=erreur d'identification");
        exit();
    }