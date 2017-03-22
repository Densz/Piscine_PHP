<!DOCTYPE html>
<html>
<head>
	<title>Page d'inscription / Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="sign_in.css">
</head>
<body>
	<div id="header">
	</div>
	<div id="container">
		<div id="page_title">
			<h1 style="margin-left: 20px;">Inscription | Connexion</h1>
		</div>
		<div id="sign_up">
			<h3>&nbsp;&nbsp;Creer un compte</h3>
			<form id="border_right" method="post" action="#">
				<span>&nbsp;&nbsp;Login :</span><br />&nbsp;&nbsp;<input class="field" type="text" name="login" value=""/><br /><br />
				<span>&nbsp;&nbsp;Adresse email :</span><br/>&nbsp;&nbsp;<input class="field" type="text" name="email" value=""><br /><br />
				<span>&nbsp;&nbsp;Mot de passe :</span><br />&nbsp;&nbsp;<input class="field" type="password" name="password" value=""><br /><br /><br />
				&nbsp;&nbsp;<input class="button" type="submit" name="submit" value="Valider l'inscription">
			</form>
		</div>
		<div id="sign_in">
			<h3>&nbsp;&nbsp;Connexion</h3>
			<form method="post" action="#">
				<span>&nbsp;&nbsp;Login :<br />&nbsp;&nbsp;<input class="field" type="text" name="login" value=""/></span><br /><br />
				<span>&nbsp;&nbsp;Mot de passe :<br />&nbsp;&nbsp;<input class="field" type="password" name="password" value=""></span><br /><br /><br />
				&nbsp;&nbsp;<input class="button" type="submit" name="submit" value="Connexion">
			</form>
		</div>
	</div>
</body>
</html>