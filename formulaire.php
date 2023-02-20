<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zombie/index</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    
        <h1>Hello alors comme ça tu es égaré ici ? tu viens peut-être après quelques mésaventures  ? Aller inscris toi sur le registre et entre te reposer.

bienvenue mon ami... Bienvenue en enfer...hi...hi bienvenue sur la route 139...
</h1>


    

    <section id="section">
			<div id="inscription">
				<form method="POST" action="index_post.php">
				    <fieldset>
                    <legend>inscription</legend>
				        <label for="pseudo"> Votre pseudo : </label>
				        <input type="text" name="pseudo" id="pseudo" required/>
				        <br/>
                        <label for="identifiant"> Votre identifiant : </label>
				        <input type="text" name="identifiant" id="identifiant" required/>
				        <br/>
				        <label for="password">Mot de passe : </label>
				        <input type="password" name="password" id="password" required/>
				        <br/>
				        <label for="mail"> Votre email : </label>
				        <input type="text" name="mail" id="mail" required/>
				        <br/>
				        <input type="submit" value="envoyer"/>
				    </fieldset>
				</form>
	        </div>

            <div id="connexion">
        <form action="session.php" method="POST">
            <fieldset>
                <legend>Connexion</legend>
                
                    <label for="identifiant">Identifiant : </label>
                    <input type="text" name="identifiant" id="identifiant" required>
                

                    <label for="password">Mot de passe : </label>
                    <input type="password" name="password" id="password" required>

                    <input type="submit" name="submit" value="gigot mon agneau ">
                
            </fieldset>
        </form>
       
    </div>
	</section>
</body>
</html>