$(document).ready(function(){



	$('.ajaxplorerbutton').click(function(event){
		event.preventDefault();
        
		var post = $( "#AuthPW,#AuthUser" ).serialize();
		$.post( OC.filePath('owncloud_ajaxplorer', 'ajax', 'seturl2.php') , post, function(data){
			
			if (data == 'true') {
			$(".ajaxplorerbutton").removeClass('red');
			$(".ajaxplorerbutton").addClass('green');
			alert("Speichern erfolgreich");
			}
			else {
			$(".ajaxplorerbutton").removeClass('green');
			$(".ajaxplorerbutton").addClass('red');
			alert("Speichern fehlgeschlagen");
			}
		});
	});



});
