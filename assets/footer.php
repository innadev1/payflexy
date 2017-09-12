<?php
	include ('assets/connect.php');
	include ('assets/function.php');

    if(isset($_POST['SUBMIT']))
    {

		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		
		if(!preg_match($email_exp,$email)) {
			echo "<script>alert('Please enter email!');</script>";

		}else{
		
			$row = getDataFromDatabase("SELECT email FROM emails WHERE email=:email", [ 
				'email' => $email,
			]);

			if($row['email']==$email) {

				echo "<script>alert(' Your e-mails are already there!');</script>";
			
			}else{

				$sql = "INSERT INTO emails (email, phone) VALUES(:email, :phone)";
		
				$row = insertDataInToDataBase($sql, [
					'email' => $email,
					'phone' => $phone,
				]);
				echo "<script>alert('Your email is registered!');</script>";			
			}
		}
	}
	
?>

<link rel="stylesheet" type="text/css" href="style/footer.css">

<div id="footer_banner">
	<canvas id="c4"></canvas>
	<div class="footer_text">
		<h1>Our experianced specialists will be glad to answer your questions!</h1>
		<h2>PLEASE, CONTACT US</h2>
	</div>
	
	<div class="flex firstform">
		<form action="index.php" method="post" name ="subForm" class="inputs" >
			<div class="inputs">
				<div><p>Email</p></div>
				<input class="footer_input" type="text" name="email"></input>
			</div>

			<div class="inputs">
				<div><p>Phone</p></div>
				<input class="footer_input" type="text" name="phone"></input>
				<!-- <button class="subscribe"> -->
			</div>
				
			<!-- </button> -->
			<div class="submit">
				<input class="footer_button" type="submit" name="SUBMIT" value="SUBMIT"></input>
			</div>
		</form>
			
		
		
		<div class="button" style="">
			<button id="formToggle">or click here</button>
			<p>and fill the form below and one of our managers<br> will contact you as soon as possible.</p>
		</div>
	</div>
	<div class="secondform">
		<form>
			<div class="row flex">
				<div>
					<p>Name</p>
					<input type="text" name="name">
				</div>
				<div>
					<p>Website/project name</p>
					<input type="text" name="project">
				</div>
			</div>
			<div class="row flex">
				<div>
					<p>Phone number <s>in intertnational format</s></p>
					<input type="text" name="number">
				</div>
				<div>
					<p>Email</p>
					<input type="text" name="email">
				</div>
			</div>
			<p>Message</p>
			<textarea></textarea>
			<div class="submitin flex">
			<input type="submit" name="form2">
			</div>
		</form>
	</div>
	
</div>

<div id="footer" class="flex">
	<div class="footer_content"><p>© ООО «Бонусный клуб», 105264, <br>
	г. Москва, улица 9-я Парковая, <br>
	дом 39, офис 210</p></div>
	
	<div class="footer_content"><p>+7 (499) 350-42-14 <br>
	Служба поддержки с 10:00 до 19:00 МСК
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