 <?php
 if(!isset($_GET["page"])){
 	$_GET["page"] = "index.php?page=accueil";
 }

 ?>

 <?php include("menu.php"); ?>

 <?php 
	switch($_GET['page']) {
		case "accueil":
			include('accueil.php');
			break;
		case "voiture":
			include ('voiture.php');
			break;
		case "cartegrise":
			include('cartegrise.php');
			break;
		case "contact":
			include('contact.php');
			break;
		}
	?>

	<footer> </footer>