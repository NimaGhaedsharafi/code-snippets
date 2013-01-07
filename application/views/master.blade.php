<html>
<head>
	<title>Code Snippets For Students</title>
	@yield( 'stylesheets' )	
	{{ HTML::style( "css/main.css" ) }}
</head>
<body>
<div class="footer">by: Nima Ghaedsharafi, Feel free to mail me , this is my mail <a href="mailto:ghaedsharafi.nima@gmail.com">ghaedsharafi.nima@gmail.com</a><br />Powered by: <a target="_blank" href="http://www.laravel.com">Laravel PHP Framework</a></div>

	<div class="container">
		@yield( 'content' )
	</div>
@yield( 'scripts' )
<script type="text/javascript">
	$('#code').height( $(document).height() -100 );
</script>
</body>
</html>