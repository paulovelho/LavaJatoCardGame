<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/lavajato.js"></script>
<script src="js/agency.js"></script>

<?php
if($page == "home") {
	?>
	<script src="js/cbpAnimatedHeader.js"></script>
	<?php
}
?>

<script type="text/javascript">
$( function() {
<?php
	@$portfolio = intval($_GET["portfolio"]);
	if( $portfolio > 0 ){
		echo '$("a.portfolio-link")['.($portfolio-1).'].click();';
	}
?>
} );
</script>

