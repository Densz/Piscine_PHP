<?php
/*function			get_back_csv()
{
	Je voulais essayer de faire une fonction pour m'en servir dans les
	deux fichiers mais fail ...
	if (($handle = fopen("./resources/product_page.csv", "r")) !== FALSE) 
	{
		$all_rows = array();
		$header = null;
		while ($row = fgetcsv($handle)) 
		{
		    if (!$header) 
		        $header = $row;
		    else
		    	$all_rows[] = array_combine($header, $row);
		}
	    fclose($handle);
	}
	return ($all_rows);
}*/

//ITS WORKING MY FRIEND !! Et le decalage est normal !
	if(isset($_POST['id']) && isset($_COOKIE['id']))
		setcookie("id", $_COOKIE['id'].','.$_POST['id'], time() + 84000);
	else if (isset($_POST['id']))
		setcookie("id", $_POST['id'], time() + 84000);
	if ($_COOKIE['id'])
		echo $_COOKIE['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Produits</title>
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
			<a href="sign_in.php" id="sign_in" title="Signin">Inscription / Connexion</a>
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
	<div id="container_list" style="text-align: right;">
		<span>Filter:</span>
		<select name="filtre" style="margin: 10px 20px;">
		    <option value="tous les produits">Tous les produits</option>
		    <option value="femme">Femme</option>
		    <option value="homme">Homme</option>
		</select>
		<?php
			if (($handle = fopen("./resources/product_page.csv", "r")) !== FALSE) 
			{
				$all_rows = array();
				$header = null;
				while ($row = fgetcsv($handle)) 
				{
				    if (!$header) 
				        $header = $row;
				    else
				    	$all_rows[] = array_combine($header, $row);
				}
			    fclose($handle);
			}
		?>
		<div style="text-align: left;">
		<ul>
		
			<?php
				$i = 0;
				while ($all_rows[$i])
				{
					echo '<form method="post" action="products_page.php">';
					echo '<li>';
						echo '<div style="display:inline-block;">';
							echo '<div><img src="'.$all_rows[$i]['img_url'].'"></div>';
							echo '<div><span>'.$all_rows[$i]['title'].'</span></div>';
							echo '<div><span>'.$all_rows[$i]['price'].'€</span></div>';
							echo '<div><input type="hidden" name="id" value="'.$all_rows[$i]["id"].'"</div>';
							echo '<div><input class="button" type="submit" name="submit" value="Ajouter au panier"></div>';
							echo '</div>';
					echo '</li>';
					echo '</form>';
					$i++;
				}
			?>
		</ul>
		</div>
	</div>
	<div style="width: 1000px; height: 200px; margin: auto;">
		<hr>
		<p style="text-align: right">© arlecomt dzheng 2017</p>
	</div>
</body>
</html>