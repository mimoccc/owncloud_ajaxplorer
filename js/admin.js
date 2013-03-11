$(document).ready(function(){



	$('.ajaxplorerbutton').click(function(event){
		event.preventDefault();
        
		var post = $( "#gluecode,#gluecodepassword,#ajaxplorerurl" ).serialize();
		$.post( OC.filePath('owncloud_ajaxplorer', 'ajax', 'seturl.php') , post, function(data){
			
			if (data == 'true') {
			$(".ajaxplorerbutton").removeClass('red');
			$(".ajaxplorerbutton").addClass('green');
			}
			else {
			alert(data);
			$(".ajaxplorerbutton").removeClass('green');
			$(".ajaxplorerbutton").addClass('red');
			}
		});
	});



});
