<?php

$pay_status= $_REQUEST['STATUS'];
$pay_id=$_REQUEST['PAYID'];
$amount=$_REQUEST['amount'];
$invoiceNumber = $_REQUEST['orderID'];
$paytype =$_REQUEST['BRAND'];

if ($pay_status == '5') {

		$status = "Accepté";
		$display = "";
		$displayNo = "none";
}

else {
	$status = "Refusé";
	$display = "none";
	$displayNo = "";
}
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/language/be_FR.js"></script>

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

	<title>La Dorrée</title>
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

				<div class="contact col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-offset-9 col-lg-offset-9 col-md-offset-9 col-sm-offset-9 col-xs-offset-9">

					<a href="https://www.facebook.com/SalleLaDoree" target="_blank" ='_blank'><i class="fa fa-facebook-square"></i></a>
					&nbsp;&nbsp;
					<a href="mailto:info@ladoree.be" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>

				</div>

			</div>

			<div id="row">

				<div class="titreRecap col-xl-8 col-lg-8 col-md-10 col-xl-offset-2 col-lg-offset-2 col-md-offset-1">Salle La Dorée</div>

			</div>

			<div id="row">

				<div class="texte col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xl-offset-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">

					  <p>Page de confirmation de paiement d’acompte</p>
						  	<table class="table .table-hover">
							    <tbody>
							      <tr>
							        <td>Numéro de commande</td>
							        <td class="infoClien"><?= $invoiceNumber ?></td>
							      </tr>
							      <tr>
							        <td>Ogone Référence</td>
							        <td class="infoClien"><?= $pay_id ?></td>
							      </tr>
							      <tr>
							        <td>Status de paiement</td>
							        <td class="infoClien"><?= $status ?></td>
							      </tr>
							      <tr>
							        <td>Type de carte</td>
							        <td class="infoClien"><?= $paytype ?></td>
							      </tr>
							      <tr>
							        <td>Acompte</td>
							        <td class="infoClien"><?= $amount ?> Euro</td>
							      </tr>
							    </tbody>
						  	</table>
				</div>

			</div>

			<div id="row">

				<div class="texte col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xl-offset-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" style="display:<?=$display;?>">
						Nous vous remercions pour votre paiement. Votre transaction est terminée et vous allez recevoir par email un avis accusant réception de votre paiement.

				</div>

				<div class="texte col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xl-offset-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" style="display:<?=$displayNo;?>">
						Votre transaction est refusé .

				</div>

			</div>

		</div>	<!-- Fin part2txt -->

	</div>

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
