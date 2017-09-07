<?php
	include ('assets/connect.php');
	include ('assets/function.php');

    if(isset($_POST['sent']))
    {

		$email = $_POST['email'];
		$phone = $_POST['phone'];

        $row = getDataFromDatabase("SELECT email FROM emails WHERE email=:email", [ 
            'email' => $email,
        ]);

        $emailErr = '';

        if($row['email']==$email) {
            $emailError = "Your e-mails are already there!".$row['email'];
            $trueError = true;
            $emailErr = 'emailErr'.$row['email'];

        }else{

            $sql = "INSERT INTO emails (email, phone) VALUES(:email, :phone)";
    
            $row = insertDataInToDataBase($sql, [
				'email' => $email,
				'phone' => $phone,
			]);
			
			$sql = "INSERT INTO emails (phone) VALUES(:phone)";
			
			$row = insertDataInToDataBase($sql, [
				'phone' => $phone
			]);

			$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
			
				if(!preg_match($email_exp,$email)) {
					echo "<script>alert('kluuda');</script>";
					// $error_message_em .= '<p style = "color: red;">Please enter email!</p>';
					// $errors['email'] = 1;
				}
		}
			if(isset($emailError)){
				// alert ($emailError);

				echo "<script>alert(' Your e-mails are already there!');</script>";
			}else{

				echo "<script>alert('Your email is registered!');</script>";

			}
						
    	}else{

	}
?>
<!-- hghghghghghggdegfdfgdfgdsadasda -->


<link rel="stylesheet" type="text/css" href="style/footer.css">

<div id="footer_banner">
	<div class="footer_text">
		<h1>Our experianced specialists will be glad to answer your questions!</h1>
		<h2>PLEASE, CONTACT US</h2>
	</div>
	
	<div class="flex">
		<form action="index.php" method="post" name ="subForm" class="inputs" >
			<div class="inputs">
				<div><p>Phone number</p></div>
				<input class="footer_input" type="text" name="email"></input>
			</div>

			<div class="inputs">
				<div><p>Email</p></div>
				<input class="footer_input" type="text" name="phone"></input>
				<!-- <button class="subscribe"> -->
			</div>
				
			<!-- </button> -->
			<div class="submit">
				<input class="footer_button" type="submit" name="sent" value="SUBMIT"></input>
			</div>
		</form>
			
		
		
		<div class="button">
			<button>or click here</button>
			<p>and fill the form below and one of our managers<br> will contact you as soon as possible.</p>
		</div>
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