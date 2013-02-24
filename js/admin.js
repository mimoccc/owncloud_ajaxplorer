$(document).ready(function(){



	$('.wikibutton').click(function(event){
		event.preventDefault();
		var post = $( "#wikiusername,#wikipassword,#wikiurl,#authuser,#authpw" ).serialize();
		$.post( OC.filePath('owncloud_ajaxplorer', 'ajax', 'seturl.php') , post, function(data){
			
			if (data == 'true') {
			$(".wikibutton").removeClass('red');
			$(".wikibutton").addClass('green');
			}
			else {
			$(".wikibutton").removeClass('green');
			$(".wikibutton").addClass('red');
			}
		});
	});



});
