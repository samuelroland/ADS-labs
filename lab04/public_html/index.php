<?php
$servername = "localhost";
$username 	= "labXXXX";
$database 	= $username;
$password 	= "XxXxXxXxX";

// Create connection
$mysqli = new mysqli($servername, $username, $password);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
$mysqli -> select_db($database);
?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 

<head> 
	<meta charset="utf-8">
	<meta name="robots" content="noindex">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#ffffff">
	
	<title>
		HEIG-VD - Photos et brochures
	</title> 

	<script src="js/ScriptResource1.axd" type="text/javascript"></script>
	<script src="js/ScriptResource2.axd" type="text/javascript"></script> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,400italic" rel="stylesheet" type="text/css"> 
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"> 
	<link href="css/slick.css" rel="stylesheet"> 
	<link href="css/styles.min.css" rel="stylesheet" type="text/css" /> 
	<link href="css/custom.css" rel="stylesheet"> 

	<meta name="Generator" content="Sitefinity 10.1.6502.0 PE" />
	<meta name="description" content="Health Engineering &amp; Economics, (HE&amp;E) is a logical outcome of the Biomedical Engineering department of HEIG-VD. In addition to the technical side of high-tech R&amp;D projects, HE&amp;E works on financial aspects, mechanical constraints, and project management issues." />
	<meta name="keywords" content="health, engineering, economics, biomedical, heig-vd" />
	</head> 
	
	<body id="top">  
	
		<div> 
			<svg width="0" height="0" style="position:absolute"><symbol viewBox="-1 -1 17 28" id="arrow-left"><path d="M14.207 1.48L13 .271.272 13 13 25.728l1.207-1.207L2.687 13l11.52-11.52z" fill="#FFF" fill-rule="evenodd"/></symbol><symbol viewBox="-1 -1 17 28" id="arrow-right"><path d="M.793 24.52L2 25.729 14.728 13 2 .272.793 1.48 12.313 13 .794 24.52z" fill-rule="evenodd"/></symbol><symbol viewBox="-1 -1 10 14" id="arrow-small"><path d="M.79 1.55L1.997.343 7.654 6l-5.657 5.657L.79 10.45 5.24 6 .79 1.55z"/></symbol><symbol viewBox="-1 -1 14 15" id="download"><g fill="#2E2E2E" fill-rule="evenodd"><path d="M10.467 5.45l1.207 1.207-5.657 5.657L.36 6.657 1.567 5.45l4.45 4.45 4.45-4.45z"/><path d="M5 0h2v11H5z"/></g></symbol><symbol viewBox="-1 -1 42 52" id="file-pdf"><g fill="none" fill-rule="evenodd"><path d="M40 48.023C40 49.115 39.19 50 38.188 50H1.813C.811 50 0 49.115 0 48.023V1.976C0 .884.811 0 1.813 0h28.751L40 10.457v37.566z" fill="#EA4B36"/><path d="M30 0v8.84l.001.067A2.173 2.173 0 0 0 32.251 11H40L30 0z" fill="#C33824"/><path d="M9.361 40c-.392 0-.769-.129-1.09-.372-1.172-.89-1.33-1.88-1.255-2.555.204-1.855 2.472-3.798 6.741-5.777 1.694-3.755 3.306-8.384 4.267-12.25-1.124-2.476-2.216-5.688-1.42-7.572.279-.66.77-1.124 1.419-1.343.257-.087.508-.131.746-.131.568 0 1.076.251 1.43.707.332.429 1.333 1.719-.174 8.134 1.519 3.172 3.67 6.404 5.732 8.617 1.476-.27 2.747-.407 3.782-.407 1.764 0 2.834.416 3.269 1.272.36.71.213 1.537-.44 2.461-.627.889-1.492 1.358-2.5 1.358-1.37 0-2.965-.875-4.745-2.604-3.196.676-6.928 1.882-9.944 3.216-.942 2.022-1.844 3.65-2.684 4.845C11.342 39.237 10.346 40 9.36 40zm2.998-5.841C9.95 35.528 8.97 36.652 8.9 37.286c-.011.104-.042.38.485.789.168-.054 1.148-.506 2.974-3.916zm15.179-5.04c.917.714 1.729 1.105 2.33 1.105.263 0 .61-.063.958-.555.168-.238.233-.39.258-.472-.138-.075-.543-.227-1.545-.227-.568 0-1.244.05-2.001.149zm-8.232-7.525a82.112 82.112 0 0 1-3.012 8.621 55.794 55.794 0 0 1 7.317-2.302c-1.52-1.787-3.04-4.018-4.305-6.319zm-.575-9.671a.693.693 0 0 0-.109.028c-.11.037-.199.099-.274.278-.29.685-.061 1.988.382 3.388.368-2.413.173-3.437.001-3.694z" fill="#FFF"/></g></symbol><symbol viewBox="-1 -1 42 48" id="play"><path d="M1.896 2.388v41.793L37.57 23.284 1.896 2.388zm36.683 19.17c1.32.773 1.32 2.68 0 3.452L2.907 45.906c-1.333.781-3.01-.18-3.01-1.725V2.388c0-1.545 1.677-2.507 3.01-1.726L38.58 21.56z" fill="#FFF" fill-rule="evenodd"/></symbol></svg> 

			<nav class="heig-nav heig-nav--sticky hidden-xs hidden-sm" data-offset="72" style="top:72px">
			<a href="/">
				<img class="img-responsive logo" style="width: 96px; left: 15px;" src="img/logo-heig-vd.svg" alt="">
			</a>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="heig-nav__row heig-nav__row--primary">
						<p href="#" class="heig-nav__link heig-nav__link-parent">Photos et brochures</p>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="heig-nav__submenus">
							<div class="col-md-10 col-md-offset-1">
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<!-- Secondary menu -->
						<div class="heig-nav__row heig-nav__row--secondary">
						
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div class="mobile-nav visible-xs visible-sm">
			<a href="#mobileMenu">
				Photos et brochures
			</a>
		</div>
		<a href="#">
			<img class="visible-xs visible-sm img-responsive logo" style="width: 96px; left: 15px;" src="img/logo-heig-vd.svg" alt="">
		</a>

		<style type="text/css">
		  .superpicture-loading { background-image: url(img/banner.jpg); }
		  @media (min-width: 768px) { .superpicture-loading { background-image: url(img/banner.jpg); } }
		  @media (min-width: 992px) { .superpicture-loading { background-image: url(img/banner.jpg); } }
		  @media (min-width: 1200px) { .superpicture-loading { background-image: url(img/banner.jpg); } }
		</style>

		<header class="superpicture">
		  <div class="superpicture__image superpicture-loading"></div>
		  <div class="superpicture__content">
			<div class="container">
			  <div class="row">
				<div class="col-sm-10 col-sm-offset-1">
				
				<ol class="breadcrumb visible-md visible-lg">			
<?php
// get menu items
if ($results = $mysqli->query("SELECT * FROM `menu` ORDER BY `level` ASC")) {
	while($obj = $results->fetch_object()){ ?>
					<li>
						<a href="<?=$obj->url ?>"><?=$obj->name ?></a>
					</li>
	<?php }
} else {
	echo $mysqli->error;
}

?>
					<li class="active">
						Photos et brochures
					</li>
				</ol>
				
				</div>
			  </div>
			</div>
		  </div>
		  <div class="superpicture__watermark">
			<img class="img-responsive" src="img/logo-hes-so.svg" alt="">
		  </div>
		</header>

		 <article class="container article"> 
			
			<div class="row">
				<div class="col-md-10 col-md-pull-3 col-md-offset-4 article__content">
					
					<div >
						<div><h2>Découvrez-nous en images</h2></div>
					</div>
					
					<div class="row">
						<div class="col-md-6 col-xs-12">
						<a href="#"><img class="vignette" src="img/v1.png" /></a>
						</div>
						<div class="col-md-6 col-xs-12">
						<a href="projet.html"><img class="vignette" src="img/v2.png" /></a>
						</div>
						<div class="col-md-6 col-xs-12">
						<a href="projet.html"><img class="vignette" src="img/v3.png" /></a>
						</div>
						<div class="col-md-6 col-xs-12">
						<a href="projet.html"><img class="vignette" src="img/v4.png" /></a>
						</div>
						<div class="col-md-6 col-xs-12">
						<a href="projet.html"><img class="vignette" src="img/v5.png" /></a>
						</div>
						<div class="col-md-6 col-xs-12">
						<a href="projet.html"><img class="vignette" src="img/v6.png" /></a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" style="margin-top: 40px;">
				<div class="col-md-10 col-md-pull-3 col-md-offset-4 article__content">
					
					<div >
						<div><h2>Téléchargez nos brochures</h2></div>
					</div>
					
					<div class="row">
						<div class="col-md-6 col-xs-12">
						<a href="#"><img class="vignette" src="img/v1.png" /></a>
						</div>
						<div class="col-md-6 col-xs-12">
						<a href="projet.html"><img class="vignette" src="img/v2.png" /></a>
						</div>
						<div class="col-md-6 col-xs-12">
						<a href="projet.html"><img class="vignette" src="img/v3.png" /></a>
						</div>
						<div class="col-md-6 col-xs-12">
						<a href="projet.html"><img class="vignette" src="img/v4.png" /></a>
						</div>
						<div class="col-md-6 col-xs-12">
						<a href="projet.html"><img class="vignette" src="img/v5.png" /></a>
						</div>
						<div class="col-md-6 col-xs-12">
						<a href="projet.html"><img class="vignette" src="img/v6.png" /></a>
						</div>
					</div>
					
				</div>
			</div> 
		</article> 

		 <footer> 
			 <div class="container"> 
				 <div class="row"> 
					<div class="col-md-10 col-md-offset-1"> 
					 <div class="row"> 
						 <div class="col-xs-6 col-sm-4"> 
						 </div> 
						 <div class="col-xs-6 col-sm-4"> 
						 </div> 
						 <div class="col-sm-4 hidden-xs"> 
							 <div> 
								<a href="http://www.vd.ch"> <img class="img-responsive pull-right m-l-3" src="img/logo-vd.png" alt="Canton de Vaud"> </a> 
								<a href="http://www.hes-so.ch"> <img class="img-responsive pull-right" src="img/logo-hes-so.png" alt="HES-SO"> </a> 
							 </div> 
						 </div> 
						 </div> 
					 </div>
				 </div> 
			 </div> 
		 </footer> 

	 </div> 
 
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
	 <script src="https://cdn.jsdelivr.net/blazy/latest/blazy.min.js"></script>
	 <script src="js/bundle.min.js"></script> 
	 <script>
	  $(document).ready(function () {

		var menu = $("#mobileMenu");
		  menu.mmenu({
			offCanvas: {
			  position: "left",
			  zposition: "front"
			}
		  });

		var x = menu.get(0);
		if (x) {
		  x.removeAttribute('style');
		}

		var bLazy = new Blazy();
	  });
	</script> 
  </body>

</html>
<?php
 $mysqli->close();
?>