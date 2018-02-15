<?php include('layouts/header.php'); ?>
<body>
	<div class="container" id="">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<header>
					
				<?php include('menu.php'); ?>
				</header>
			</div>
		</div><!-- #row -->
		<div class="row">
			<div class="col-md-3 bg-light">
				stulpelis
			</div>
			<div class="col-md-9 bg-info">
				<h1>Pradinis puslapis</h1>
				<div id="pirmas">
					<?php echo 2; 
					$name = 'Vaidas';
					$show = false;
					echo '<br>';
					
					

					if ($name == 'Vaida') {
						echo 'labas, Vaida';
					} else {
						echo 'labas, nepazystamasis...';
				}
					
					?>
					
					<?php if ($show == true) {  ?>
					
					rodyti bloka

					<?php } ?>


if ($show == true) {
	echo 'rodyti bloka';
}

				</div>
				<div id="antras">
					
				</div>
			</div>
		</div>
	<div class="row">
		<div class="col-md-12">
			
			<footer>
				<div class="row">
					<div class="col-md-4 footer1 bg-primary">
						pirmas footer stulpelis
					</div>
					<div class="col-md-4 footer2 bg-danger">
						antras footer stulpelis
					</div>
					<div class="col-md-4 footer3 bg-dark">
						trecias footer stulpelis
					</div>
				</div>
				
			</footer>
		</div>
	</div>

		
		
	</div>
	<script>

		// pradinis tekstas
		var text = 'Sveiki, žmonės';
		var number_integer = 1;
		var text = "1";
		var number_float = 2.56;
		var boolean = false;
		var saldus_gyvenimas = ['šokoladas', 'ledai', 'likeris'];
		var combined =  text + " " + number_integer;
		var user = ['vardas', 'pavarde'];
		var user2 = {'name' : 'Vaida'};
		//saldus_gyvenimas[1] = 'obuolys';
		



		// for (var i=0; i<saldus_gyvenimas.length; i++) {
		// 	if(saldus_gyvenimas[i] == 'ledai') {
		// 		alert('radau');
		// 	} else {
		// 		alert('nenoriu ir neveikiu');
		// 	}
		// }


		// Operatoriai
		// var skaicius = 1;
		// alert( skaicius == Number('1') );

		// skaicius == '1asilas' // true
		// skaicius === '1' // false
		// skaicius === Number('1') // true
		// !=
		// *
		// /
		// +
		// -
		// %


		
		




		// suteikiu kintamajam kita reiksme
		// text = 'Ko žiūri?';
		// alert(name);

		// if (3>1) {
		// 	alert('boolean verte yra true');
		// } else {
		// 	alert('boolean verte yra false');
		// }
<?php include_once('layouts/header.php'); ?>
<?php include('layouts/footer.php'); ?>