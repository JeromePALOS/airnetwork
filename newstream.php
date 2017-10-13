<!DOCTYPE	html>
<html>
	<head>
    	<meta charset="utf-8">    
    	<title>Air Network | PROPOSER SON STREAM</title>
		
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script src="js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
    	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
		<link href="styles/css.css" rel="stylesheet" type="text/css">
		
		<meta name="keywords" content="webtv, twitch, streamer, stream, streams, live, lives, rejoindre webtv, web-tv, rejoindre une webtv, rejoindre une webtv, proposer son stream, ajouter son stream, faire connaitre son stream, faire connaitre son stream, faire connaître son stream, faire connaitre son live, faire connaître son live" />
		<meta name="description" content="Retrouvez de nombreux lives et webTV avec des divers streamer sur Air Network." />
		
	</head>
	<body class="container-fluid">

		<nav class="navbar navbar-inverse navbar-fixed-top" style="width:100%" role="navigation">
			<div class="container row">
				<div class="navbar-header" style="margin-left: 2%; ">
					<h1  class="nav-brand nounder"><a href="index.html">Air Network</a></h1>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barre-de-navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
<!--Menu-->			
					
				
				<div class="collapse navbar-collapse" id="barre-de-navigation" style="margin-top: 2%;">
					<ul class="nav navbar-nav" style="margin-left: 4%;">
						<li><a href="lives.html">LIVES</a></li>
						<li><a href="news.html">ACTU</a></li>
						<li><a href="contact.php">CONTACT</a></li>
						<li class="active"><a href="newstream.php">PROPOSER SON STREAM</a></li>			
					</ul>
<!--RECHERCHE-->					

					<a href="javascript:afficher('search');" class="icone nav navbar-nav navbar-right">
						<img class="search"  src="images/search.png" alt="recherche"/>
					</a>
					<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="search" style="display:none">
						<form role="search" name="searchform" method="get" class="row" >
							<div class="input-group">
								<input type="text" placeholder="recherche" class="form-control left-rounded">
								<div class="input-group-btn">
									<button type="submit" class="btn btn-inverse right-rounded">Chercher</button>
								</div>
							</div>
						</form>
					</div>					
				</div>
			</div>	
		</nav>
		
<!--Titre autre live-->		
		<div class="margetop" style="text-align:center;">
			<hr class="hrsup" />
			<h3>PROPOSER SON STREAM</h3>
			<div class="row">
				<div class="col-md-5"><hr class="hrinf"/> </div>
				<div class="col-md-offset-2 col-md-5"><hr class="hrinf" /> </div>
			</div>
		</div>
<!--Live-->	

	
<?php
// S'il y des donnÃ©es de postÃ©es
if ($_SERVER['REQUEST_METHOD']=='POST') {
 
  // (1) Code PHP pour traiter l'envoi de l'email
 
  // RÃ©cupÃ©ration des variables et sÃ©curisation des donnÃ©es
  $nom     = htmlentities($_POST['nom']); // htmlentities() convertit des caractÃ¨res "spÃ©ciaux" en Ã©quivalent HTML
  $prenom   = htmlentities($_POST['prenom']);
  $mail   = htmlentities($_POST['mail']);
  $pseudo = htmlentities($_POST['pseudo']);
  $chaine = htmlentities($_POST['chaine']);
  $urlchaine = htmlentities($_POST['urlchaine']);
  $donation = htmlentities($_POST['donation']);
  $sub = htmlentities($_POST['sub']);
  $web = htmlentities($_POST['web']);
  $twitter = htmlentities($_POST['twitter']);
  $facebook = htmlentities($_POST['facebook']);
  $youtube = htmlentities($_POST['youtube']); 
  $description = htmlentities($_POST['description']);
  
  // Variables concernant l'email
 
  $destinataire = 'web.airnetwork@gmail.com'; // Adresse email du webmaster (Ã  personnaliser)
  $objet = 'Demande de Stream - '.$pseudo.''; // Titre de l'email
  $contenu = '<html><head><title>Titre du message</title></head><body>';
  $contenu .= '<p>Bonjour, vous avez reeçu un message à  partir de votre site web.</p>';
  $contenu .= '<p>DEMANDE DE STREAM.</p>';
  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>Prenom</strong>: '.$prenom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$mail.'</p>';
  $contenu .= '<p><strong>Pseudo</strong>: '.$pseudo.'</p>';
  $contenu .= '<br />';
  $contenu .= '<p><strong>Lien de la chaine</strong>: '.$chaine.'</p>';
  $contenu .= '<p><strong>Url chaine</strong>: '.$urlchaine.'</p>';
  $contenu .= '<p><strong>Lien donation</strong>: '.$donation.'</p>';
  $contenu .= '<p><strong>Lien sub</strong>: '.$sub.'</p>';
  $contenu .= '<br />';
  $contenu .= '<p><strong>Site Web</strong>: '.$web.'</p>';
  $contenu .= '<p><strong>Lien Twitter</strong>: '.$twitter.'</p>';
  $contenu .= '<p><strong>Lien Facebook</strong>: '.$facebook.'</p>';
  $contenu .= '<p><strong>Lien YouTube</strong>: '.$youtube.'</p>';
  $contenu .= '<br />';
  $contenu .= '<p><strong>Description de la chiane</strong>: '.$description.'</p>';
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
 
//envoi
  $envoi = '<html><head><title>Titre du message</title></head><body>';
  $envoi .= '<p>Bonjour '.$pseudo.', vous avez envoyé une demande de stream sur le site AirNetwork.</p>';

  $envoi .= '<p>Votre demande va être analysé, cela peut prendre quelques jours pour que votre stream soit intégré au site</p>';
  $envoi .= '<p>Vous pouvez nous contacter par mail : web.airnetwork@gmail.com.</p>';
  $envoi .= '<br />';
  $envoi .= '<p>Merci de votre soutien pour le site</p>';
  $envoi .= '<p>A très bientôt sur Airnetwork</p>';
  $envoi .= '<p>Cordialement, <br />AirNetwork</p>';
  $envoi .= '</body></html>'; // Contenu du message de l'email (en XHTML)
 
 
 
 
 
  // Pour envoyer un email HTML, l'en-tÃªte Content-type doit Ãªtre dÃ©fini
  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
 
  // Envoyer l'email
  if($nom=='' OR $prenom=='' OR $mail=='' OR $pseudo=='' OR $chaine=='' OR $urlchaine==''){
	echo("<h2 style='color:red'>Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.</h2>");
  }else{
	mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
	mail($mail, "Demande de Stream sur AirNetwork", $envoi, $headers);
	echo ("<h2 style='color:green'>Demande envoy&eacute;!</h2>"); // Afficher un message pour indiquer que le message a Ã©tÃ© envoyÃ©
  }
  // (2) Fin du code pour traiter l'envoi de l'email
}
?>

			<div class="container">
				<form method="post" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>Nom</label><span style="color:red"> *</span> :
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="nom" /></p>
						</div>
						
						<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>Pr&eacute;nom</label><span style="color:red"> *</span> : 
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="prenom" /></p>
						</div>
					</div>	
					
					
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>E-mail</label><span style="color:red"> *</span> :
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="mail" /></p>
						</div>
						
						<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>Pseudo</label><span style="color:red"> *</span> :
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="pseudo" /></p>
						</div>
					</div>

					<br /><br /><br />
					
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>Nom de la chaine</label><span style="color:red"> *</span> :
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="chaine" /></p>
						</div>
						
						<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>site web perso : </label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="web" /></p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>Url de la chaine</label><span style="color:red"> *</span> :
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="urlchaine" /></p>
						</div>
						
						<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>Lien twitter : </label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="twitter" /></p>
						</div>
					</div>

					
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>Lien des donations : </label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="donation" /></p>
						</div>
						
						<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>Lien Facebook : </label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="facebook" /></p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>Lien sub : </label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="sub" /></p>
						</div>
						
						<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p><label>Lien Youtube : </label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="text" name="youtube" /></p>
						</div>
					</div>
					
					<div class="row">
						<p><label for="message">Description / pr&eacute;sentation de votre Chaine :  </label>
					</div>
					<div class="row"> 
						<textarea name="description" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" rows="15">
						</textarea></p>
					</div>
					<br />
					<div class="row">
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"> 
							Je certifie que tous ces liens sont de ma propriété et j’autorise le site airnetwork à afficher ces informations.
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<input type="submit" value="    Envoyer    " ></input>
						</div>
					</div>
				</form>
			</div>
			

		<br /><br />
		
		<footer>
			<div class="row">
				<div class="black" style="padding-bottom:5%;">
					<div class="container">
						<br />
						<h3 class="col-lg-9 col-md-9 col-sm-9 col-xs-12"> <a href="apropos.html">A propos</a> - © .Tous droits r&eacute;serv&eacute;s </h3>
						<ul class="list-inline">
							<li><a href="#"><img src="images/twitterwhite.png" alt="twitter" class="icone" /></a></li>
							<li><a href="#"><img src="images/facebookwhite.png" alt="facebook" class="icone" /></a></li>
							<li><a href="#"><img src="images/youtubewhite.png" alt="youtube" class="icone" /></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	<script>

	//use pour search, 
		function afficher(id){
			if(document.getElementById(id).style.display=="none")
			{
				document.getElementById(id).style.display="block";
			}else{
				document.getElementById(id).style.display="none";
			}
			return true;
		}
		

	

	
	</script>	
	</body>

</html>