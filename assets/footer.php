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
			echo "<script>alert(<?php echo $language[$lang]['enter'] ?>);</script>";

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
				<input class="footer_button" type="submit" name="SUBMIT" value="SUBMIT"></input>
			</div>
		</form>
			
		
		
		<div class="button" style="">
			<button id="formToggle"><?php echo $language[$lang]['click_here'] ?></button>
			<p><?php echo $language[$lang]['fill1'] ?><br><?php echo $language[$lang]['fill2'] ?></p>
		</div>
	</div>
	<div class="secondform">
		<form>
			<div class="row flex">
				<div>
					<p><?php echo $language[$lang]['name'] ?></p>
					<input type="text" name="name">
				</div>
				<div>
					<p><?php echo $language[$lang]['proj.name'] ?></p>
					<input type="text" name="project">
				</div>
			</div>
			<div class="row flex">
				<div>
					<p><?php echo $language[$lang]['phone_number1'] ?><s><?php echo $language[$lang]['phone_number2'] ?></s></p>
					<input type="text" name="number">
				</div>
				<div>
					<p><?php echo $language[$lang]['email'] ?></p>
					<input type="text" name="email">
				</div>
			</div>
			<p><?php echo $language[$lang]['message'] ?></p>
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