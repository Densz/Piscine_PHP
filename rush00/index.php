<?php session_start()?>

<!DOCTYPE html>
<html>
<head>
	<title>ASOS: Boutique en Ligne</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
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
	<div id="slider">
		<img id="img_slider" src="http://content.asos-media.com/-/media/homepages/mw/2017/mar/20/deskto/jeanshero2003mwdrummer-new.jpg">
	</div>
	<div style="width: 1000px; height: 200px; margin: auto;">
		<hr>
		<p style="text-align: right">© arlecomt dzheng 2017</p>
	</div>
</body>
</html>