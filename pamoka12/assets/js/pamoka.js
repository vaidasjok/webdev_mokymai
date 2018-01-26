		
// $(document).ready(function() {
	
// 	$('#submit').click(function(event, name='Vardas'){
// 			//var name = document.getElementById('name').value;
// 		var no_errors = true;
// 		event.preventDefault();
// 		alert(name);
// 		var name = $('#name').val();
// 		document.getElementById('name_placement').innerHTML = name;
// 	});
// });
			
		
window.onload="name_transfer()";
	function name_transfer(name='Vardas', event) 
		{
			var no_errors = true;
			event.preventDefault();
			//var name = document.getElementById('name').value;
			alert(name);
			var name = $('#name').val();
			document.getElementById('name_placement').innerHTML = name;

		}
		
		
