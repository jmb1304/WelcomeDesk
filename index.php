
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="notify.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {
	$('#form').hide();
    $.notify("Sucessfully Checked In!", "success")
});

</script>
<link rel="stylesheet" href="css/app.css" type="text/css" />
<?php
require('config.php');
?>

<div id="begin" align="center" class="center-fix">
	<h1><?php echo constant('headerText');?></h1>
	<a id="beginButton" href="#" class="btn btn-primary btn-lg btn-huge">Get Started!</a>
</div>

<div id="form" align="center" class="center-fix">
	<h1>Please fill out this form to recieve your visitor tag.</h1>
	<form class="fix-width" action="formProcess.php" method="POST">
		<input class="form-control form-control-lg" name="field1" type="text" placeholder="Employee's Name"></inputclass="form-control">
		<input class="form-control" name="field2" type="text" placeholder="Visitor's Name"/>
		<input class="form-control btn btn-success btn-lg" type="submit" name="submit" value="Submit" />
	</form>
</div>
<script type="text/javascript">
	$('#beginButton').on('click', function(event) {
		 $('#begin').hide();
	 $('#form').show();
	});
</script>

<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
