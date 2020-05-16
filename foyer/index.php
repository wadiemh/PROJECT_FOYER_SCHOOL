
<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>foyer WADIE 3IL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="container">
    <style>
        p {
            color: chocolate;
            font-size: 20px;
        }
    </style>
    <dev>
        <img height="100" src="3il.png" alt="3il logo">
    </dev>
    <hr />
    
    <span>
        <img height="50" src="LOGO\LOGO WITHOUT TEXT.PNG" alt="3il logo">
    </span>
    <span >FOOD</span>
    <span>
        <img height="20" src="LOGO/FOOD ICON.png" alt="fooding icon">
    </span>

    <br />
    <br />
    <br />
    <header>
        <div class="p-3 mb-2 bg-white text-dark ">
            <p>WELCOME IN THE FOYER</p>
			<p class="p-3 mb-2 bg-white text-dark">Please login to be redirected the the command page.</p>
        </div>
    </header>
    <main>
        <div>
            <form action=Traitement.php method="get" style="text-align:center;" class="p-3 mb-2 bg-white text-dark">
                <input class="p-3 mb-2 bg-gradient-light text-dark" type="text" name="NAME" value="USERNAME"><br>
                <input class="p-3 mb-2 bg-gradient-light text-dark" type="password" name="PASS" value="PASSWORD"><br>
				<!--<input class="p-3 mb-2 bg-gradient-light text-dark" type="text" name="DROITSS" value=""><br>
               <!-- <a class="p-3 mb-2 bg-gradient-light text-dark" href="comand.php">LOG IN</a>-->
				<input type="submit" class="p-3 mb-2 bg-gradient-light text-dark"  value="LOG IN"/>
                <br />
               <!-- <a class="p-3 mb-2 bg-gradient-light text-dark" href="inscription.php">SIGN UP</a>-->
            </form>
			<!--
			<form action="insert.php" method="post">
										<p>
											<label for="firstName">First Name:</label>
											<input type="text" name="first_name" id="firstName">
										</p>
										<p>
											<label for="lastName">Last Name:</label>
											<input type="text" name="last_name" id="lastName">
										</p>
										<p>
											<label for="emailAddress">Email Address:</label>
											<input type="text" name="email" id="emailAddress">
										</p>
										<input type="submit" value="Submit">
</form>
-->
        </div>

    </main>
    <footer>
        <div>
            <p>ABOUT US</p>
        </div>
    </footer>

</body>
</html>

