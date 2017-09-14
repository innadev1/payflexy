<?php
	include ('assets/connect.php');
	include ('assets/function.php');
	include ('assets/lang.php');
    if(isset($_POST['SUBMIT']))
    {
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		
		if(!preg_match($email_exp,$email)) {
			echo "<script>alert( '".$language[$lang]['enter']."');</script>";
		}else{
		
			$row = getDataFromDatabase("SELECT email FROM emails WHERE email=:email", [ 
				'email' => $email,
			]);
			if($row['email']==$email) {
				echo "<script>alert(<?php echo $language[$lang]['there'] ?>);</script>";
			
			}else{
				$sql = "INSERT INTO emails (email, phone) VALUES(:email, :phone)";
		
				$row = insertDataInToDataBase($sql, [
					'email' => $email,
					'phone' => $phone,
				]);
				echo "<script>alert(<?php echo $language[$lang]['reg'] ?>);</script>";			
			}
		}
	}
	
	$error_message_n = "";
	$error_message_n2 = "";
	$error_message_n3 = "";
	$error_message_p = "";
	$error_message_p2 = "";
	$error_message_p3 = "";
	$error_message_pho = "";
	$error_message_pho2 = "";
	$error_message_em = "";
	$error_message_m = "";
	$error_message_m2 = "";
	$mailSuccess = false;


	if(isset($_POST['submit_two'])) {
		$to = 'my.worktest94@gmail.com';

		$name = $_POST["name"];
		$project = $_POST["project"];
		$number = $_POST["number"];
		$email = $_POST["email"];
		$message = $_POST["message"];

		// $error_message_n = "";
		$error_message_n2 = "";
		$error_message_n3 = "";
		$error_message_p = "";
		$error_message_p2 = "";
		$error_message_p3 = "";
		$error_message_pho = "";
		$error_message_pho2 = "";
		$error_message_em = "";
		$error_message_m = "";
		$error_message_m2 = "";

		$errors = ['name'=>0,'project'=>0,'number'=>0, 'email'=>0, 'message'=>0];
// --------------------------------------------->>>
		// name
		// if(empty($name)) {
		// 	$error_message_n .= '<p style = "color: red;">Please enter name.</p>';
		// 	$errors['name'] = 1;
		// }
		// $email_exp_a = "/[^A-Za-z]/";
		
		if(preg_match($email_exp_a,$_POST['name'])) {
			$error_message_n2 .= '<p style = "color: red;">Only alphabet!</p>';
			$errors['name'] = 1;
		}
		if(strlen($name) < 2){
			$error_message_n3 .= '<p style = "color: red;">Name is too short.</p>';
			$errors['name'] = 1;
			
		}
// --------------------------------------------->>>
		// project
		if(empty($project)) {
			$error_message_p .= '<p style = "color: red;">Please enter project name.</p>';
			$errors['project'] = 1;
		}
		if(strlen($project) > 20){
			$error_message_p2 .= '<p style = "color: red;">Name of porject is too long.</p>';
			$errors['project'] = 1;
			
		}
		if(strlen($project) < 2){
			$error_message_p3 .= '<p style = "color: red;">Name of project is too short.</p>';
			$errors['project'] = 1;
			
		}
// --------------------------------------------->>> 
		// Phone
		if(strlen($number) < 7) {
        	$error_message_pho .= '<p style = "color: red;">Phone number too short.</p>';
			$errors['number'] = 1;
		}
		$email_exp_n = "/[^0-9]/";
		
		if(preg_match($email_exp_n,$_POST["number"])) {
			$error_message_pho2 .= '<p style = "color: red;">only numbers!</p>';
			$errors['number'] = 1;
		}
// --------------------------------------------->>>>
		// EMAIL 
		$error_message = "";
    	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
    	if(!preg_match($email_exp,$email)) {
        	$error_message_em .= '<p style = "color: red;">Please enter email!</p>';
			$errors['email'] = 1;
		}
		
// --------------------------------------------->>>
		// messege
		if(empty($message)) {
			$error_message_m .= '<p style = "color: red;">Please enter text.</p>';
			$errors['message'] = 1;
		}
		if(strlen($message) > 1000) {
        	$error_message_m2 .= '<p style = "color: red;">Message too long.</p>';
			$errors['message'] = 1;
		}
		if(empty($error_message_n2) && empty($error_message_n3) && empty($error_message_p) && empty($error_message_p2)
			&& empty($error_message_p3) && empty($error_message_pho) && empty($error_message_pho2) && empty($error_message_em) && empty($error_message_m)
			&& empty($error_message_m2)) 
		{
			$subject = 'the subject';
	$message_two = $language[$lang]['name_em'] . " " . $name . "\r\n" . $language[$lang]['phone_em'] . " " . $number . "\r\n" . $language[$lang]['email_em'] . " " . $email . "\r\n" . $language[$lang]['phone_em'] . " " . $message;
	$headers = $language[$lang]['repl_em'] . " " . $email . "\r\n";
	if(mail($to, $subject, $message_two, $headers)){
				
				$mailSuccess = true;
				echo "<script>alert('".$language[$lang]['sendsende']."' );</script>";
			}else{

			}
		}
	}

	
	
?>

<link rel="stylesheet" type="text/css" href="style/footer.css">

<div id="footer_banner">
	<canvas id="c4"></canvas>
	<div class="footer_text">
		<h1><?php echo $language[$lang]['Our_experienced'] ?></h1>

		<h2><?php echo $language[$lang]['contact_us'] ?></h2>
	</div>
	
	<div class="flex firstform">
		<form action="index.php" method="post" name ="subForm" class="inputs" >
			<div class="inputs">
				<div><p><?php echo $language[$lang]['email'] ?></p></div>
				<input class="footer_input" type="text" name="email"></input>
			</div>

			<div class="inputs">
				<div><p><?php echo $language[$lang]['phone'] ?></p></div>
				<input class="footer_input" type="text" name="phone"></input>
				<!-- <button class="subscribe"> -->
			</div>
				
			<!-- </button> -->
			<div class="submit">
				<input class="footer_button" type="submit" name="SUBMIT" value="<?php echo $language[$lang]['sub'] ?>"></input>
			</div>
		</form>
			
		
		
		<div class="button" style="">
			<button id="formToggle"><?php echo $language[$lang]['click_here'] ?></button>
			<p><?php echo $language[$lang]['fill1'] ?><br><?php echo $language[$lang]['fill2'] ?></p>
		</div>
	</div>
	<div class="secondform">
		<form action="index.php?f=e<?php if(isset($lang)){ echo '&lang='.$lang ; } ?>" method="post" name ="mailform" class="inputs" >

			<div class="row flex">
				<div>
					<p><?php echo $language[$lang]['name'] ?></p>
					<input type="text" name="name" value = "<?php if(isset($_POST['name']) && $errors['name'] == 0){ echo $_POST['name']; } ?>">
					<?php echo ($error_message_n); ?>
					<?php echo ($error_message_n2); ?>
					<?php echo ($error_message_n3); ?>
				</div>

				<div>
					<p><?php echo $language[$lang]['proj.name'] ?></p>
					<input type="text" name="project" value = "<?php if(isset($_POST['project']) && $errors['project'] == 0){ echo $_POST['project']; } ?>">
					<?php echo ($error_message_p); ?>
					<?php echo ($error_message_p2); ?>
					<?php echo ($error_message_p3); ?>
				</div>
			</div>

			<div class="row flex">
				<div>
					<p><?php echo $language[$lang]['phone_number1'] ?><s><?php echo $language[$lang]['phone_number2'] ?></s></p>
					<input type="text" name="number" value = "<?php if(isset($_POST['number']) && $errors['number'] == 0){ echo $_POST['number']; } ?>">
					<?php echo ($error_message_pho); ?>
					<?php echo ($error_message_pho2); ?>
				</div>

				<div>
					<p><?php echo $language[$lang]['email'] ?></p>
					<input type="text" name="email" value = "<?php if(isset($_POST['email']) && $errors['email'] == 0){ echo $_POST['email']; } ?>">
					<?php echo ($error_message_em); ?>
				</div>
			</div>

			<p><?php echo $language[$lang]['message'] ?></p>
				<input type="text" name="message" value = "<?php if(isset($_POST['message']) && $errors['message'] == 0){ echo $_POST['message']; } ?>">
					<?php echo ($error_message_m); ?>
					<?php echo ($error_message_m2); ?>
			<div class="submitin flex">
				<input class="footer_button" type="submit" name="submit_two" value="<?php echo $language[$lang]['sub_two'] ?>">
			</div>
		</form>
	</div>
	
</div>

<div id="footer" class="flex">
	<div class="footer_content"><p><?php echo $language[$lang]['adressus'] ?></p></div>
	
	<div class="footer_content"><p><?php echo $language[$lang]['phoneus'] ?>
	</p></div>
	
	<div class="footer_content" id="partners">
		<img src="img/partners.png">
	</div>


	
	
	<div class="footer_content">
		<div class="socilas">
			<img src="img/socials/twitter.png">
			<img src="img/socials/instagram.png">
			<img src="img/socials/facebook.png">
		</div>
	</div>
</div>