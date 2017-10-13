<!DOCTYPE	html>
<html>
	<head>
    	<meta charset="utf-8">    
    	<title>Air Network | Contact</title>
		
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script src="js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
    	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
		<link href="styles/css.css" rel="stylesheet" type="text/css">
		
		<meta name="keywords" content="webtv, twitch, streamer, stream, streams, live, lives, rejoindre webtv, web-tv, rejoindre une webtv, rejoindre une webtv, contact, contacter airnetwork" />
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
						<li class="active"><a href="contact.php">CONTACT</a></li>
						<li><a href="newstream.php">PROPOSER SON STREAM</a></li>			
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
		<div class="margetop" style="text-align:center;>
			<hr class="hrsup" />
			<h3>Contact</h3>
			<div class="row">
				<div class="col-md-5"><hr class="hrinf"/> </div>
				<div class="col-md-offset-2 col-md-5"><hr class="hrinf" /> </div>
			</div>
		</div>
<!--Live-->	


<?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
 
  // (1) Code PHP pour traiter l'envoi de l'email
 
  // Récupération des variables et sécurisation des données
  $nom     = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
  $prenom   = htmlentities($_POST['prenom']);
  $mail   = htmlentities($_POST['mail']);
  $sujet = htmlentities($_POST['sujet']); // Titre de l'email
  $message = htmlentities($_POST['message']);
  
  // Variables concernant l'email
 
  $destinataire = 'web.airnetwork@gmail.com'; // Adresse email du webmaster
  //$objet = 'Titre du message'; 
  $contenu = '<html><head><title>Titre du message</title></head><body>';
  $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
  $contenu .= '<p>CONTACT</p>';
  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>Prenom</strong>: '.$prenom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$mail.'</p>';
  $contenu .= '<p><strong>Sujet</strong>: '.$sujet.'</p>';
  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
 
  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
 
  // Envoyer l'email
  if($nom =='' OR $prenom=='' OR $mail=='' OR $sujet='' OR $message=''){
	echo("<h2 style='color:red'>Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.</h2>");
  }else{
	mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
	echo ("<h2 style='color:green'>Message envoy&eacute;!</h2>"); // Afficher un message pour indiquer que le message a été envoyé
  }
  // (2) Fin du code pour traiter l'envoi de l'email
}
?>
			<div class="container">
				<form method="post" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>">
					<div class="row">
						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							<p><label>Nom</label> :
						</div>
						<input type="text" name="nom" /></p>
					</div>
					<div class="row">
						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							<p><label>Pr&eacute;nom </label> : 
						</div>
						<input type="text" name="prenom" /></p>
					</div>	
					<div class="row">
						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							<p><label>E-mail</label> : 
						</div>
						<input type="text" name="mail" /></p>
					</div>
					<div class="row">
						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">	
							<p><label>Sujet</label> : 
						</div>
						<input type="text" name="sujet" /></p>
					</div>
					<div class="row">
						<p><label for="message">Votre message :  </label>
					</div>
					<div class="row"> 
						<textarea name="message" id="ameliorer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" rows="15"></textarea></p>
					</div>
					<br />
					<div class="row">
						<div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-10 col-xs-offset-10">
						<input type="submit" value="    Envoyer    " name="submit"></input>
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