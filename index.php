<?php
	include ('assets/connect.php');
	include ('assets/lang.php');

?>


<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
        <title>payflexy</title>
		
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/cnt.js"></script>		

    </head>

	<body>
		<!-- <div id="stats" style="width: 50px; height: 50px; position: fixed; background-color: rgba(255,255,255,1); z-index: 10">0</div> -->
		<div>
			<?php include 'assets/header.php'; ?>
			
			<div id="about">
				<canvas id="c2" style="z-index: 0;"></canvas>	
				<div class="info1" style="z-index: 1;position: relative;">
					<h1>We are a team of <br>
					experienced professionals in <br>
					the field of e-commerce</h1>
					<p>
					We offer payment solutions for various businesses in Europe, CIS and worldwide. 
					Having a wide network of trustworthy partners, we are always ready to make a 
					profitable offer for you and your business. We offer package solutions for 
					clients with business activities of different risk levels, and ICO projects 
					are not an exception. The choice of payment solution is an important decision 
					for development of your business.We are proud of the fact that several ICO 
					projects have chosen PAYFLEXY and already work with our payment solution. 
					</p>
				</div>
				
				<div class="info2">
					<h1>So, what are the <br>
					advantages of PAYFLEXY? </h1>
					<p>
					Today, most ICO projects accept payments only in crypto currencies. But 
					the possibility to accept fiat money will significantly increase the number
					of your investors – as not all of potential clients have possibility to 
					transfer crypto currency. Thus, it is very important for any ICO project 
					to provide investors with the choice of payment method: crypto currency 
					or fiat money, payment card or bank transfer, e-wallet or by cash (for 
					example, Western Union). All these payment methods are offered by PAYFLEXY. 
					</p>
				</div>
			</div>
			
			<div id="what_you_get">
				<h2>Working with us, you get:</h2>
				
				<div class="wrap">
					<div><img src="img/1.png">
						<h1>payment solution for accepting fiat money for realization of your project</h1>
					</div>
					<div><img src="img/2.png">
						<h1>monitoring payments in order to minimize risks</h1>
					</div>
					<div><img src="img/3.png">
						<h1>anti-fraud system for protection from fraud transactions</h1>
					</div>
					<div><img src="img/4.png">
						<h1>24 h support for questions regarding the system</h1>
					</div>
				</div>
				
				<p>All you need to do is to choose the payment method 
				which is most convenient for you and fill in the form 
				on our website. Our experienced specialists will be glad
				to consult you and to assist you in integration of the 
				payment solution on your website for realization of your
				ideas, which is indeed the base of any ICO project, in 
				shortest possible time.</p>
			</div>
			
			<div id="second_wave">
				<canvas id="c3"></canvas>
			</div>
			
			<div id="payment">
				<h2>CARD PAYMENTS</h2>
				
				<div class="flex_button">
					<div><button>VISA and MasterCard</button></div>
					<div><button>Multi-currency processing</button></div>
					<div><button>Card verification</button></div>
					<div><button>Anti-fraud module</button></div>
					<div><button>Payments monitoring departments</button></div>
				</div>
				
				<div class="card flex">
					<div class="textaboutcard visable">
						<h1>VISA and MasterCard </h1>
						<p>VISA and MasterCard are the most famous and popular 
						payment cards systems. Installing a payment page for 
						accepting payments with Visa and MasterCard, you get 
						a possibility to accept payments in fiat money almost 
						from all over the world directly to your account. When
						integrating cards processing, it is important to note 
						that these systems have their own requirements and 
						conditions for accepting payments, control transactions
						and compliance with the established international rules
						regarding financial operations.
						</p>
					</div>
					<div class="textaboutcard">
						<h1>Multi-currency processing</h1>
						<p>Multi-currency processing allows to accept payments online from all over the world, in a currency which is most convenient for you and your customer. For the customer it is convenient most of all because they can make a payment on your website in their national currency with no conversion. And it is convenient for you, because as an owner of our multi-currency payment solution you will get the possibility to make settlements with your clients, partners and suppliers in several currencies.

						</p>
					</div>
					<div class="textaboutcard">
						<h1>Card verification</h1>
						<p>Card verification is necessary in order to eliminate the possibility of fraud transactions. One of customer authorization methods is 3-D secure technology. This method is used in order to protect cards from unsanctioned operations. <br><br>
						<b>3-D secure protocol is:</b><br><br>
						Security of personal data – the card is protected with personal password, which is known only to the card owner and is valid only for one transaction in real time; <br><br>

						Simplicity – 3-D secure is activated automatically at the moment of transaction. After filling in all the data, the webpage of the bank (the card issuer) appears, where a one-time code is applied (it may be received by different means depending on the bank’s technology).						
						</p>
					</div>
					<div class="textaboutcard">
						<h1>Anti-fraud module </h1>
						<p>Anti-fraud module is a special software, developed in order to prevent fraud usage of payment cards. The settings of the module provide monitoring and analysis of transactions for detecting possible inconsistencies in transactions.
						</p>
					</div>
					<div class="textaboutcard">
						<h1>Payments monitoring department</h1>
						<p>Payments monitoring department assesses the payments according to established criteria according to international requirements in order to prevent fraudulent transactions and minimize risks in card payments. 
						</p>
					</div>
					<div class="card_photo"></div>
				</div>
				
				<div class="wrap2">
					<div class="ewallets">
						<table>
						<tr>
							<th class="img"></th>
						</tr>
						<tr>
						  <td>
							<h4>E-WALLETS</h4>
							<h1>With the development of e-commerce, many users prefer electronic wallets as a solution for settlements online both for private transfers <!--and for their business activity, refusing from bank services, because working with e-wallets takes less time and expenses. We offer integration of the system of accepting payments through e-wallets for your ICO project. You will be able to receive payments from the clients of most famous e-wallets, such as PayPal, Skrill, Neteller, Qiwi, etc. Such transfers take less time and money, and investors can make payments directly from their e-wallets to your account.--></h1>
							<h3 read="ewallets">read more</h3>
						  </td>
						</tr>
						</table>
					</div>
					<div class="western">
						<table>
						<tr>
							<th class="img"></th>
						</tr>
						<tr>
						  <td>
							<h4>WESTERN UNION TRANSFERS</h4>
							<h1>PAYFLEXY offers a unique possibility to accept investments for your ICO project through the famous payment system Western Union. It is <!--simple, convenient and accessible all over the world – as an alternative to bank accounts, cards and electronic. With Western Union you will be able to receive investments in various popular currencies. Western Union transfers are characterized by the high security level – you and your customer can be sure in safety of your funds.--></h1>
							<h3 read="western">read more</h3>
						  </td>
						</tr>
						</table>
					</div>
					<div class="bank blue">
					<table>
					<tr>
						<th class="img">
							
						</th>
					</tr>
					<tr>
					  <td>
						<h4>BANK TRANSFERS</h4>
						<h1>For investors, who do not have the possibility to take part in the ICO project with a payment card, we offer bank transfers  Bank transfer <!--(Wire-transfer) is a reliable and verified method of transfer of fiat money, using which both the sender and the recipient can be sure of the safety of their funds. ntegrating the possibility to receive investments by bank transfers, you get an additional method of receiving funds for your ICO project, thus increasing the number of your clients. Investors will have the possibility to transfer funds directly from their internet-banking to your account according to your bank details. The funds, transferred by investors, will be credited to your account in the shortest possible time.--></h1>
						<h3 read="bank">read more</h3>
					  </td>
					</tr>
					</table>
					</div>
				</div>
				<div class="display flex">
					
						<div class="text">
							<div id="ewallets" class="disptext visable">
								<h2>E-WALLETS</h2>
								<p>With the development of e-commerce, many users prefer electronic wallets as a solution for settlements online both for private transfers and for their business activity, refusing from bank services, because working with e-wallets takes less time and expenses. We offer integration of the system of accepting payments through e-wallets for your ICO project. You will be able to receive payments from the clients of most famous e-wallets, such as PayPal, Skrill, Neteller, Qiwi, etc. Such transfers take less time and money, and investors can make payments directly from their e-wallets to your account.</p>
							</div>
							<div id="western" class="disptext">
								<h2>WESTERN UNION TRANSFERS</h2>
								<p>
									PAYFLEXY offers a unique possibility to accept investments for your ICO project through the famous payment system Western Union. It is simple, convenient and accessible all over the world – as an alternative to bank accounts, cards and electronic. With Western Union you will be able to receive investments in various popular currencies. Western Union transfers are characterized by the high security level – you and your customer can be sure in safety of your funds.
								</p>
							</div>
							<div id="bank" class="disptext">
								<h2>BANK TRANSFERS</h2>
								<p>
									For investors, who do not have the possibility to take part in the ICO project with a payment card, we offer bank transfers  Bank transfer (Wire-transfer) is a reliable and verified method of transfer of fiat money, using which both the sender and the recipient can be sure of the safety of their funds. ntegrating the possibility to receive investments by bank transfers, you get an additional method of receiving funds for your ICO project, thus increasing the number of your clients. Investors will have the possibility to transfer funds directly from their internet-banking to your account according to your bank details. The funds, transferred by investors, will be credited to your account in the shortest possible time.
								</p>
							</div>
						</div>
						<div class="pic"></div>
					
				</div>
			</div>
			
			<?php include 'assets/footer.php'; ?>

		</div>
	</body>
</html>
