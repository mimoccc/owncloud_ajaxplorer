$(document).ready(function(){



	$('.ajaxplorerbutton').click(function(event){
		event.preventDefault();
        
		var post = $( "#gluecode,#gluecodepassword,#ajaxplorerurl,#AuthPW,#AuthUser" ).serialize();
		$.post( OC.filePath('owncloud_ajaxplorer', 'ajax', 'seturl.php') , post, function(data){
			
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
