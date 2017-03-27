<!DOCTYPE html>
<html>
<head>
	<title>Page d'inscription / Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="header">
		<div id="logo_header">
			<a href="index.php" title="Accueil">
				<img id="img_logo_header" title="asos" alt="asos" src="https://assets.asosservices.com/MasterLayout/images/_header/asos-logo.png">
			</a>
		</div>
		<div id="account">
			<a href="sign_in.php" id="sign_in" title="Signin">Inscription / Connexion </a>
			<a href="shopping_bag.php" title="Shopping_bag">
				<img id="my_shopping_bag" title="Shopping_bag" alt="Shopping_bag" src="resources/shopping_bag.png">
			</a>
		</div>
		<div id="gender">
			<table id="gender_table">
				<tr>
					<td class="categories">
						<a href="products_page.php" title="Tous les produits">TOUS LES PRODUITS</a>
					</td>
					<td class="categories">
						<a href="products_page.php" title="Femmes">FEMMES</a>
					</td><td class="categories">
						<a href="products_page.php" title="Hommes">HOMMES</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div id="container">
		<div id="page_title">
			<h1 style="margin-left: 20px;">Inscription | Connexion</h1>
		</div>
		<div id="sign_up_page">
			<h3>&nbsp;&nbsp;Créer un compte</h3>
			<form id="border_right" method="post" action="#">
				<span>&nbsp;&nbsp;Login :</span><br />&nbsp;&nbsp;<input class="field" type="text" name="login" value=""/><br /><br />
				<span>&nbsp;&nbsp;Adresse email :</span><br/>&nbsp;&nbsp;<input class="field" type="text" name="email" value=""><br /><br />
				<span>&nbsp;&nbsp;Mot de passe :</span><br />&nbsp;&nbsp;<input class="field" type="password" name="password" value=""><br /><br /><br />
				&nbsp;&nbsp;<input class="button" type="submit" name="submit" value="Valider l'inscription">
			</form>
		</div>
		<div id="sign_in_page">
			<h3>&nbsp;&nbsp;Connexion</h3>
			<form method="post" action="#">
				<span>&nbsp;&nbsp;Login :<br />&nbsp;&nbsp;<input class="field" type="text" name="login" value=""/></span><br /><br />
				<span>&nbsp;&nbsp;Mot de passe :<br />&nbsp;&nbsp;<input class="field" type="password" name="password" value=""></span><br /><br /><br />
				&nbsp;&nbsp;<input class="button" type="submit" name="submit" value="Connexion">
			</form>
		</div>
	</div>
	<div style="width: 1000px; height: 200px; margin: auto;">
		<hr>
		<p style="text-align: right">© arlecomt dzheng 2017</p>
	</div>
</body>
</html>