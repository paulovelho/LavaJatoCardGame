<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("sections/meta.php") ?>
</head>

<body id="page-top" class="index lavajato">
<?php
    $catarse = "https://www.catarse.me/lavajato";
    $page = "regras";
?>

    <?php include("sections/analytics.php") ?>
    
    <?php include("sections/top-nav-bar.php"); ?>

    <?php include("sections/rules.php"); ?>

    <?php include("sections/footer.php"); ?>

</body>

<?php include("sections/scripts.php") ?>

<script type="text/javascript">
$(function() {
	// Set this variable with the height of your sidebar + header
	var offsetPixels = 820; 

	$(window).scroll(function() {
		if ($(window).scrollTop() > offsetPixels) {
			$( ".fixed-catarse" ).addClass("sticky");
		} else {
			$( ".fixed-catarse" ).removeClass("sticky");
		}
	});
});
</script>

</html>
