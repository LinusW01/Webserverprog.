<!DOCTYPE html>

<html lang="sv">

  <head>
     <meta charset="utf-8">
     <title>Logga in</title>
		 <link rel="stylesheet" href="css/stilmall.css">
	</head>
  <body id="login">
    <div id="wrapper">
    <?php 
		require "header.php";
	?>
      
      <nav>
        <ul>
          <li><a href="index.html">Start</a></li>
          <li><a href="products.html">Produkter</a></li>
          <li><a href="sida3.html">Varusida 2</a></li>
          <li><a href="login.html">Logga in</a></li>
        </ul>
      </nav>
		
			<main> <!--Huvudinnehåll-->
				<section>
					 <form action="" method="post">
            <p><label for="user">Användarnamn:</label>
            <input type="text" id="user" name="username"></p>
            <p><label for="pwd">Lösenord:</label>
            <input type="password" id="pwd" name="password"></p>
            <p>
            <input type="submit" value="Logga in">
            </p>
          </form>
          <p class="create"><a href="#">Skapa användare</a></p>
				</section>
			</main>

    </div>
    <?php 
		require "footer.php";
	?>

	</body>
</html>
