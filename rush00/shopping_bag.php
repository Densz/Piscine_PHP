<?php
	if (isset($_COOKIE['id']))
	{
		include 'get_csv.php';
		$all_rows = get_csv();
		$products = explode(',', $_COOKIE['id']);
		$i = 0;
		foreach ($products as $elem)
		{
			$i++;
			echo "Produit $i -> $elem\n";
		}
	}
	else
		echo "<span>Votre panier est vide.</span>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>asos: shopping_bag</title>
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
	<div id="block_list">
		<div id="shopping_list">
			<div style="width: 1000px; height:auto; margin: 20px auto;display: flex;flex-direction: column; text-align: right;">
				<div style="margin-bottom: 20px;"><input class="button" type="submit" name="submit" value="VIDER LE PANIER"></div>
				<form method="post" action="shopping_bag.php">
				<div style="width: 100%; height: 140px;display:flex; align-content:center; align-items:center;background-color: #E8E7E8; justify-content: space-around;margin-bottom: 15px;">
					<img width="100px" src="http://images.asos-media.com/inv/media/6/1/8/9/7439816/silver/image1xl.jpg?$XL$">
					<span>Robe 1</span>
					<span>10€50</span>
					<select name="qty">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
					<span style="margin-left: 20px;">Toal <br /><br /><b>10€50</b></span>
					<img width="15px" height="15px" src="./resources/cross.png">
				</div>
				</form>
				<div style="margin-bottom: 20px;"><span style="font-size: 15px;"><b>TOTAL PANIER :</b><br /><span style="font-size: 20px">10€50</span></span></div>
				<div><input class="button" type="submit" name="submit" value="VALIDER MA COMMANDE"></div>
			</div>
		</div>
	</div>
	<div style="width: 1000px; height: 200px; margin: auto;">
		<hr>
		<p style="text-align: right">© arlecomt dzheng 2017</p>
	</div>
</body>
</html>