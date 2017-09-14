<?php
	include ('assets/connect.php');
	include ('assets/lang.php');

?>


<html>
    <head>   
		<meta name="viewport" content="width=device-width, initial-scale=1">  
		<link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
        <title>payflexy</title>
		
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/hammer.js"></script>		
		<script type="text/javascript" src="js/cnt.js"></script>		
		<script>
			var lang = '<?php echo $lang ?>';
			//alert(lang)
				
		</script>
		<?php if(isset($_GET['f'])){ ?>
			<script>
				var formext = false
				

			$(function(){
			
				offset = $('#footer_banner').offset()
				$('body, html').scrollTop(offset.top+200)

				<?php if($_GET['f']=='e'){ ?>
					formext = true
					
						$('.firstform form, .firstform .button p ').css('display','none')
						$('.secondform').css({'display':'block','opacity':'1'})

						text = lang=='en'? 'back' : 'назад'
						$('#formToggle').html(text).parent().addClass('back')

						$('.firstform').css('margin-top','10vw')


					
				<?php }?>
				
			})
			</script>
		<?php	}?>

    </head>

	<body>
		<!-- <div id="stats" style="width: 50px; height: 50px; position: fixed; background-color: rgba(255,255,255,1); z-index: 10">0</div> -->
		<div>
			<?php include 'assets/header.php'; ?>
			
			<div id="about">
				<canvas id="c2" style="z-index: 0;"></canvas>	
				<div class="info1" style="z-index: 1;position: relative;">
					<h1><?php echo $language[$lang]['team_of_exp1'] ?><br>
					<?php echo $language[$lang]['team_of_exp2'] ?><br>
					<?php echo $language[$lang]['team_of_exp3'] ?></h1>
					<p>
					<?php echo $language[$lang]['we_offer'] ?>
					</p>
				</div>
				
				<div class="info2">
					<h1><?php echo $language[$lang]['so_what'] ?></h1>
					<p>
					<?php echo $language[$lang]['today'] ?> 
					</p>
				</div>
			</div>
			
			<div id="what_you_get">
				<h2><?php echo $language[$lang]['with_us_get'] ?></h2>
				
				<div class="wrap">
					<div><img src="img/1.png">
						<h1><?php echo $language[$lang]['payment_solution'] ?></h1>
					</div>
					<div><img src="img/2.png">
						<h1><?php echo $language[$lang]['monitoring'] ?></h1>
					</div>
					<div><img src="img/3.png">
						<h1><?php echo $language[$lang]['anti'] ?></h1>
					</div>
					<div><img src="img/4.png">
						<h1><?php echo $language[$lang]['24'] ?></h1>
					</div>
				</div>
				
				<p><?php echo $language[$lang]['all'] ?></p>
			</div>
			
			<div id="second_wave">
				<canvas id="c3"></canvas>
			</div>
			
			<div id="payment">
				<h2><?php echo $language[$lang]['c_pay'] ?></h2>
				
				<div class="flex_button">
					<div><button><?php echo $language[$lang]['carts'] ?></button></div>
					<!-- <div><button><?php echo $language[$lang]['master'] ?></button></div> -->
					<div><button><?php echo $language[$lang]['multi'] ?></button></div>
					<div><button><?php echo $language[$lang]['c_verification'] ?></button></div>
					<div><button><?php echo $language[$lang]['anti_module'] ?></button></div>
					<div><button><?php echo $language[$lang]['pays'] ?></button></div>
				</div>
				
				<div class="card flex" id="pan2">
					<div class="arrows">
						<div class="next" id="n2"></div>
						<div class="prev" id="p2"></div>
					</div>
					<div class="textaboutcard visable">
						<h1><?php echo $language[$lang]['carts'] ?></h1>
						<p><?php echo $language[$lang]['carts_t'] ?>
						</p>
					</div>
					<!-- <div class="textaboutcard">
						<h1><?php echo $language[$lang]['master'] ?></h1>
						<p><?php echo $language[$lang]['master_t'] ?>
						</p>
					</div> -->
					<div class="textaboutcard">
						<h1><?php echo $language[$lang]['multi'] ?></h1>
						<p><?php echo $language[$lang]['multi_t'] ?>
						</p>
					</div>
					<div class="textaboutcard">
						<h1><?php echo $language[$lang]['c_verification'] ?></h1>
						<p><?php echo $language[$lang]['c_verification_t'] ?></p>
					</div>
					<div class="textaboutcard">
						<h1><?php echo $language[$lang]['anti_module'] ?></h1>
						<p><?php echo $language[$lang]['anti_module_t'] ?>
						</p>
					</div>
					<div class="textaboutcard">
						<h1><?php echo $language[$lang]['pays'] ?></h1>
						<p><?php echo $language[$lang]['pays_t'] ?> 
						</p>
					</div>
					<div class="card_photo"></div>
				</div>
				
				<div class="wrap2" id="pan1">
					<div class="arrows">
						<div class="next" id="n1"></div>
						<div class="prev" id="p1"></div>
					</div>
					<div class="content ewallets">
						<table>
						<tr>
							<th class="img"></th>
						</tr>
						<tr>
						  <td>

							<h4><?php echo $language[$lang]['e-wallets'] ?></h4>
							<h1><?php echo $language[$lang]['e-wallets_t'] ?></h1>
							<h3 read="ewallets"><?php echo $language[$lang]['read_more'] ?></h3>

						  </td>
						</tr>
						</table>
					</div>
					<div class="content western">
						<table>
						<tr>
							<th class="img"></th>
						</tr>
						<tr>
						  <td>

							<h4><?php echo $language[$lang]['western_transfers'] ?></h4>
							<h1><?php echo $language[$lang]['western_transfers_t'] ?></h1>
							<h3 read="western"><?php echo $language[$lang]['read_more'] ?></h3>

						  </td>
						</tr>
						</table>
					</div>
					<div class="content bank">
					<table>
					<tr>
						<th class="img">
							
						</th>
					</tr>
					<tr>
					  <td>

						<h4><?php echo $language[$lang]['b_tranfers'] ?></h4>
						<h1><?php echo $language[$lang]['b_tranfers_t'] ?></h1>
						<h3 read="bank"><?php echo $language[$lang]['read_more'] ?></h3>

					  </td>
					</tr>
					</table>
					</div>
					<div class="content master">
					<table>
					<tr>
						<th class="img">
							
						</th>
					</tr>
					<tr>
					  <td>

						<h4><?php echo $language[$lang]['master']?></h4>
						<h1><?php echo $language[$lang]['master_t']?></h1>
						<h3 read="master"><?php echo $language[$lang]['read_more'] ?></h3>

					  </td>
					</tr>
					</table>
					</div>
				</div>
				<div class="display flex">
					
						<div class="text">
							<div id="ewallets" class="disptext visable">
								<h2><?php echo $language[$lang]['e-wallets'] ?></h2>
								<p><?php echo $language[$lang]['e-wallets_t'] ?></p>
							</div>
							<div id="western" class="disptext">
								<h2><?php echo $language[$lang]['western_transfers'] ?></h2>
								<p>
								<?php echo $language[$lang]['western_transfers_t'] ?>
								</p>
							</div>
							<div id="bank" class="disptext">
								<h2><?php echo $language[$lang]['b_tranfers'] ?></h2>
								<p>
								<?php echo $language[$lang]['b_tranfers_t'] ?>
								</p>
							</div>
							<div id="master" class="disptext">
								<h2><?php echo $language[$lang]['master'] ?></h2>
								<p>
								<?php echo $language[$lang]['master_t'] ?>
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
