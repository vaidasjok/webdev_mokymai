window.onload="name_transfer()";
	function name_transfer(name='Vardas') 
		{
			var no_errors = true;
			event.preventDefault();
			//var name = document.getElementById('name').value;
			alert(name);
			var name = $('#name').val();
			document.getElementById('name_placement').innerHTML = name;

		}
		
