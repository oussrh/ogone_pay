<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$tel = $_POST['telephone'];
$acompte = $_POST['acompte'];
$date = $_POST['date'];

$Name = $nom.' '.$prenom;

$PSPID = 'SHANB';
$passphrase = 'Azes7895**Azes7895**';
$credit=$acompte*100;
$idorder = RAND(890000,895689596);
$logo = "logoblack.png";


$Ogone_sha1 = "AMOUNT=".$credit.$passphrase."CN=".$Name.$passphrase."COMPLUS=".$date.$passphrase."CURRENCY=EUR".$passphrase."EMAIL=".$email.$passphrase."LANGUAGE=fr_FR".$passphrase."ORDERID=".$idorder.$passphrase."OWNERTELNO=".$tel.$passphrase."PSPID=".$PSPID.$passphrase."TITLE=Payment via Ogone".$passphrase;

$Ogone_sha1Cle = sha1($Ogone_sha1);

$form1 = '<form name="form1" id="form1" action="https://secure.ogone.com/ncol/prod/orderstandard.asp" method="post" >

<input type="hidden" name="AMOUNT" value="'.$credit.'" />
<input type="hidden" name="COMPLUS" value="'.$date.'" />
<input type="hidden" name="CN" value="'.$Name.'" />
<input type="hidden" name="CURRENCY" value="EUR" />
<input type="hidden" name="DATE" value="'.$date.'">
<input type="hidden" name="EMAIL" value="'.$email.'">
<input type="hidden" name="LANGUAGE" value="fr_FR" />
<input type="hidden" name="ORDERID" value="'.$idorder.'" />
<input type="hidden" name="OWNERTELNO" value="'.$tel.'">
<input type="hidden" name="PSPID" value="'.$PSPID.'" />
<input type="hidden" name="SHASIGN" value="'.$Ogone_sha1Cle.'" />
<input type="hidden" name="TITLE" value="Payment via Ogone">';


?>
<!DOCTYPE html>
<html lang="fr">
<head>

	<!-- Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="description" content="La Dorrée une salle " />
	<meta name="robots" content="index, nofollow">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Vegas -->
	<link rel="stylesheet" href="vegas/vegas.min.css">
	<script src="vegas/vegas.min.js"></script>

	<!-- Style -->
	<link href="style.css" rel="stylesheet" media="all" type="text/css">
	<link rel="stylesheet" media="(max-width: 991px)" href="style.css" />

	<!-- Favicon -->

  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="favicon/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="favicon/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="favicon/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="mfavicon/stile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="favicon/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="favicon/mstile-310x310.png" />



	<title>La Dorrée recapitulative acompte</title>
</head>

<body>

	<div class="container">


		<div id="bgslide" class="part1img col-xl-6 col-lg-6 col-md-6 hidden-xs hidden-sm carousel slide">



			<div id="row">


				<div class="logo" onclick="location.href='http://ladoree.be';"></div>

			</div>



		</div>


		<div class="part2txt col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">

			<div id="row">

				<div class="titreRecap col-xl-8 col-lg-8 col-md-10 col-xl-offset-2 col-lg-offset-2 col-md-offset-1">Salle La Dorée</div>

			</div>

			<div id="row">

				<div class="texte col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xl-offset-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">

					  <p>Veuillez trouver ci-dessous un tableau récapitulatif de votre commande :</p>
						  	<table class="table .table-hover">
							    <tbody>
							      <tr>
							        <td>Nom</td>
							        <td class="infoClien"><?= $nom ?></td>
							      </tr>
							      <tr>
							        <td>Prenom</td>
							        <td class="infoClien"><?= $prenom ?></td>
							      </tr>
							      <tr>
							        <td>Email</td>
							        <td class="infoClien"><?= $email ?></td>
							      </tr>
							      <tr>
							        <td>Télephone</td>
							        <td class="infoClien"><?= $tel ?></td>
							      </tr>
							      <tr>
							        <td>Acompte</td>
							        <td class="infoClien"><?= $acompte ?> Euro</td>
							      </tr>
							    </tbody>
						  	</table>
				</div>

			</div>

			<?= $form1 ?>

          <div class="condition col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xl-offset-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
            En cliquant sur "Passer au paiement" , je reconnais avoir pris connaissance des <a href="http://ladoree.be/conditionGeneral.pdf" target="_blank">conditions générales de vente</a>
          </div>
	        <div id="row">

    				<button type="submit" form="form1" class="acompteRecap btn btn-info btn-lg col-xl-8 col-lg-8 col-md-8 col-sm-6 col-xs-8 col-xs-offset-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 col-xs-offset-2">
    				Passer au paiement
    				</button>
          </div>

	        </form>

					<div id="row">
							<div class="ogone col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-offset-9 col-lg-offset-9 col-md-offset-9 col-sm-offset-9 col-xs-offset-9">
								<img src="images/inginico.png" class="img-responsive" onclick="window.open('https://payment-services.ingenico.com');"/>
							</div>
					</div>

		</div>	<!-- Fin part2txt -->

	</div> <!-- Fin container -->

<!-- Script Vegas -->
<script type="text/javascript">

	$( document ).ready(function() {
		$("#bgslide").vegas({
			loop: true,
			delay: 30000,
			firstTransition: 'fade',
		    firstTransitionDuration: 5000,
		    transition: 'fade',
		    transitionDuration: 1000,
			slides: [
						{ src: "images/slide1.png" },
						{ src: "images/slide2.png" },
						{ src: "images/slide3.png" }
					]
		});

	});

</script>

</body>

</html>
