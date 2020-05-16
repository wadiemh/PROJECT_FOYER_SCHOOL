
<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>INSCRIPTION DANS FOYER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="container">
    
    <style>
        p {
            color: black;
            font-size: 20px;
        }
        .span {
        color: #f00;
        }
    </style>
    <dev>
        <img height="100" src="3il.png" alt="3il logo">
    </dev>
    <hr />
    <dev class="p-3 mb-2 bg-white text-dark">
        <span>
            <img height="60" src="LOGO\LOGO WITHOUT TEXT.PNG" alt="3il logo">
        </span>
        <span><b>FOYER 3IL</b></span>
        <span>
            <img height="25" src="LOGO/dishblack.png" alt="fooding icon">
        </span>
    </dev>
    <br />
    <br />
    <br />
    <header>
        <div class="p-1 mb-1 bg-white text-dark">
            <p style="text-align:center" ;>Créez votre compte</p>
        </div>
    </header>
    <main>
        <div class="p-3 mb-2 bg-white text-dark">
            <form method="POST" style="text-align:center;" class="p-3 mb-2 bg-white text-dark">
			    <input class="p-3 mb-2 bg-gradient-light text-dark" type="text" name="NAME" value="LAST NAME\USERNAME"><br>
                <input class="p-3 mb-2 bg-gradient-light text-dark" type="text" name="FirstName" value="FIRST NAME"><br>
                <input class="p-3 mb-2 bg-gradient-light text-dark" type="password" name="PASS" value="password"><br>
              <!--  <input class="p-3 mb-2 bg-gradient-light text-dark" type="text" name="pass" value="Confirm your password"><br> -->
                <input class="p-3 mb-2 bg-gradient-light text-dark" type="email" name="MAIL" value="email"><br>
				<input type="submit" class="p-3 mb-2 bg-gradient-light text-dark" value="S'enregestrez"/>
            </form>
        </div>
    </main>
    <footer>
        <div>
            <p style="text-align:center" ;>ABOUT US</p>
            <h1 style="text-align:center;">CENTRED BIENVENUE</h1>
        </div>
    </footer>
</body>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=okok", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
// Attempt insert query execution
try{
	//---------------------------------------
    $sql = "INSERT INTO utilisateur (login, pass,droits,email,fisrtname) VALUES (:a, :b,:c,:d,:e)";
    $stmt = $pdo->prepare($sql);
    $_REQUEST['DROITSS']= 'admin';
    //Bind parameters to statement
    $stmt->bindParam(':a', $_REQUEST['NAME']);
    $stmt->bindParam(':b', $_REQUEST['PASS']);
    $stmt->bindParam(':c', $_REQUEST['DROITSS']);
	$stmt->bindParam(':d', $_REQUEST['MAIL']);
	$stmt->bindParam(':e', $_REQUEST['FirstName']);
	
    // Execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>