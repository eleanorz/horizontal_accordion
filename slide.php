<html>
	<head>
		<title>testing out accordian</title>
		<link rel="stylesheet" type='html/css' href="slide.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<script type="text/javascript">
			$(document).ready(function(){
				$('#splashslide').siblings().children('.bigslide').hide();
				$('#splashslide').siblings().children('.smalltab').css('background-color','black');
				$('.smalltab').hover(function(){
				$(this).siblings().show(); $(this).parent().siblings().children('.bigslide').hide();$(this).parent().siblings().children('.smalltab').css('background-color','black');
				$(this).css('background-color','orange');});
			});
		</script>
	</head>
	<body>

		<div id='splashslide' class='slide_container' >
			<div class='bigslide'>slide 1</div>
			<div class='smalltab'> tab</div>
		</div>

		<div class='slide_container'>
			<div class='bigslide'>slide 2</div>
			<div class='smalltab'> tab</div>
		</div>

		<div class='slide_container'>
			<div class='bigslide'>slide 3</div>
			<div class='smalltab'> tab</div>			
		</div>
	
	</body>
	</html>
</html>