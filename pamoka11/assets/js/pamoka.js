// window.onload="initFunctions()";
$( document ).ready(function() {
    initFunctions();
});

function initFunctions() 
{
	name_transfer();
	
}

function name_transfer(event, name='Vardas') 
		{
			event.preventDefault();
			alert(name);
			name = $('#name').val();
			document.getElementById('name_placement').innerHTML = name;

		}

	
		
