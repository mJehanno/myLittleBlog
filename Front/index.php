<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MyBlog</title>
		<link href="main.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	</head>

	<body>
		<header>

		</header>
		<script>
			function file(fichier) {
				if (window.XMLHttpRequest) // FIREFOX
					xhr_object = new XMLHttpRequest();
				else if (window.ActiveXObject) // IE
					xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
				else
					return(false);
				xhr_object.open("GET", fichier, false);
				xhr_object.send(null);
				if (xhr_object.readyState == 4)
					return(xhr_object.responseText);
				else
					return(false);
			}

			function writeDiv(value, nomChamp) {
				var selector = document.getElementsByTagName(nomChamp);
				$(selector).after(value);
			}

			function hiding(){
				console.log(arguments.length);
				$('.content').animate({
					marginLeft : "170%"
				},800,function(){
					$('.content').hide();
				});
				$('.content_ajax').animate({
					marginLeft : "170%"
				},800,function(){
				$('.content_ajax').hide().finish();

				});


			}

			function showing(categorie){
				var display  = file('blog.php?display='+escape(categorie));
				window.setTimeout(function(){writeDiv(display,'h3')},900)
			}


		</script>
		<menu>
			<span onclick="location.reload();"><u>Accueil</u></span>
			<span onclick="hiding();showing('dev');" >Dev</span>
			<span onclick="hiding();showing('divers');" >Divers</span>
			<span onclick="hiding();showing('envie');" >Envie</span>
			<span onclick="hiding();showing('emmerde');" >Emmerde</span>
			<span onclick="hiding();showing('humour');" >Humour</span>
		</menu>
		<h1>Mes Envies, Mes Humeurs, Mes Emmerdes</h1>
		<h3>Tout ça réunit en un seul endroit ! </h3>

		<div class="container">
			<?php
				include_once('../connexion.php');
				include_once('../Back/fonction.php');
				$cursor = getAllBillet($collectionBillet);
				foreach($cursor as $result){
			?>
			<div class="content" id="<?php echo $result['_id']; ?>">
			<label>Titre : <?php echo $result['titre']; ?></label>
			<hr>
			<label>Catégorie : <?php echo $result['categorie']; ?></label>
			<label>Billet : <?php echo $result['message']; ?></label>
			<em>Publié le : <?php echo $result['date']; ?></em>
			</div>
			<?php
				}
			?>
		</div>


		<footer>

		</footer>
	</body>
</html>
