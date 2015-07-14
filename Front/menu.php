<script src="http://code.jquery.com/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<link href="menu.css" rel="stylesheet">
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
				var span = $('span');
				var selector = $('#'+categorie);
				$(span).removeClass('selected');
				$(selector).addClass('selected');
				var display  = file('blog.php?display='+escape(categorie));
				window.setTimeout(function(){writeDiv(display,'h3')},900);
			}


		</script>
		<menu>
			<span><a href='index.php'><u>Accueil</u></a></span>
			<span id="dev" onclick="hiding();showing('dev');">Dev</span>
			<span onclick="hiding();showing('divers');" id="divers">Divers</span>
			<span onclick="hiding();showing('envie');" id="envie">Envie</span>
			<span onclick="hiding();showing('emmerde');" id="emmerde">Emmerde</span>
			<span onclick="hiding();showing('humour');" id="humour">Humour</span>
		</menu>
