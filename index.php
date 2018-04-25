<?php
	$gewicht1 = $lengte2 ="";
	$operand = "/";
	if(isset($_GET['gewicht1']) && isset($_GET['lengte2']))
	{
		$gewicht1 = $_GET['gewicht1'];

		$lengte2 = $_GET['lengte2'];

	}

calc($gewicht1, $lengte2, $operand);
	function calc($gewicht1,  $lengte2, $operand)
	{
		$bmi = round($gewicht1 / ($lengte2 / 100) / ($lengte2 / 100) , 1);
			return ($bmi);
	}
	function printSource(){
	 }
?>
<!DOCTYPE html>
<html lang="en">
	  <head>
		<meta charset="utf-8">
		<title>bmi calculator</title>
		<style type="text/css">
				body 	{background-color:lightgrey; font-family: "Courier", monospace;}
				input   {color:black;}
				p    	{color:blue;font-weight: bold;}
				legend  {color:green; font-size: 200%;}
				fieldset{width: 250px;}
		</style>
	  </head>
	  <body>
		<div> Tiesto Schouten GD1B </div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
			<fieldset>
				<legend>Berekening</legend>
				<p>Uw gewicht in kilo's: <input type="	text" name="gewicht1" placeholder = "getal" value = "<?php echo $gewicht1 ?>"></p>
				<p>Uw lengte in cm: <input type="text"name="lengte2" placeholder = "getal" value = "<?php echo $lengte2 ?>"></p>

				<p><input type="submit" name="versturen" value="Versturen"></p>
			</fieldset>
			<p><?php echo "uw bmi is ". calc($gewicht1,  $lengte2, $operand); ?></p>
		<?php
			$bmi = round($gewicht1 / ($lengte2 / 100) / ($lengte2 / 100) , 1);

			switch($bmi) {

						case ($bmi < 18.5):

						echo "you are skinny";
							# code...
							break;

						case ($bmi >= 18.5 && $bmi < 25):
						echo "you are average";
							# code...
							break;

						case ($bmi >= 25 && $bmi < 30):
						echo "would be smart to start training";
							# code...
							break;

						case ($bmi >= 30 && $bmi <40):
						echo "you should definitly start training";
							# code...
							break;

						case ($bmi >= 40):
						echo "get profesional help";
							# code...
							break;

			}

		?></form>
		<hr>
	  </body>
</html>
