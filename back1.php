<?php

$error=0;

if(isset($_GET['eid']) && isset($_GET['isize']))
{
	$eid = $_GET['eid'];
	$image = $_GET['isize'];	
}

if(!empty($eid) && !empty($image))
{
	$email = test_input($eid);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error=1;
?>
				<br><br>
				<div class="alert alert-danger container">
					<h2><p style="color:red;" class="text-center">
						E-mail ID you entered is incorrect
					</p></h2>
				</div>
				
		<?php	}else if($image>2047)	{
			$error=1;
	?>
			<div class="alert alert-danger container">
					<h2><p style="color:red;" class="text-center">
						Image size entered is incorrect
					</p></h2>
				</div>
	
	<?php 		} else{

		$hash = md5(strtolower(trim($eid)));
		$grav_url = "https://www.gravatar.com/avatar/".urlencode($hash)."?s=".$image."&default=mm";
		//echo $grav_url;
		
		
		}
}
else
{
	echo 'All fields are required';
}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}



?>


<html>
<body>
	<div class="row">
		<?php if ($error==0) { ?>
			<img src="<?php echo $grav_url; ?>" alt="" />
		<?php } else{}     ?>
	</div>
</body>
</html>
