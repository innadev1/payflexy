$(function(){

	scrt = 0

	Ww = window.innerWidth
	Wh = window.innerWidth

	renderFun = []
	renderFun[0] = function(){}
	var anim1 = {}
	var TIME = 0
	anim1.pos = {hole:{x:0,y:0},fill:{x:0,y:0}}

	function red1scrt(){
		if (scrt<Wh*0.4) {
			a = 1-scrt/(Wh*0.4)
			return a
		}else{
			return 0
		}
		
	}

	renderFun[1] = function(){
	//	console.log(red1scrt())
		ctx1.clearRect(0,0,c1w,c1h)



		anim1.pos.hole.x = Math.sin(TIME*0.0001)*(c1w/2)*(0.3*mouse.x+1)*red1scrt()+c1w/3
		anim1.pos.hole.y = Math.cos(TIME*0.0003)*(c1h/2)*(0.3*mouse.y+1)*red1scrt()+c1h/6
		ctx1.drawImage(imgs[0],anim1.pos.hole.x,anim1.pos.hole.y,c1w/3,c1w/3)

		anim1.pos.fill.x = -Math.sin(TIME*0.0001)*(c1w/3)*(0.3*mouse.x+1)*red1scrt()+c1w/3
	//	console.log(-Math.sin(TIME*0.0001)+'*'+(c1w/3)+'*'+(0.3*mouse.x+1)+'*'+red1scrt()+'+'+c1w/3)
		anim1.pos.fill.y = -Math.cos(TIME*0.0003)*(c1h/3)*(0.3*mouse.y+1)*red1scrt()+c1h/6
		ctx1.drawImage(imgs[1],anim1.pos.fill.x,anim1.pos.fill.y,c1w/3,c1w/3)

	}
	var anim2 = {}
	anim2.pos = {x:0,y:0} 
	anim2.pos2 = {x:0,y:0} 
	anim2.wave1 = {h:0.6,offset:0.1}

	aboutO = $('#about').offset()

	function rend2sctr(){
		s = scrt-aboutO.top()
		if(s<0){}

	}

	renderFun[2] = function(){

		ctx2.clearRect(0,0,c2w,c2h)

		ctx2.drawImage(imgs[4],anim2.pos2.x,mouse.y*-c2h*0.03,c2w,c2h)
		ctx2.drawImage(imgs[4],-c2w+anim2.pos2.x,mouse.y*-c2h*0.03,c2w,c2h)
		
		ctx2.drawImage(imgs[2],anim2.pos.x,anim2.pos.y+(c2h*anim2.wave1.offset),c2w,c2h*0.6)
		ctx2.drawImage(imgs[2],-c2w+anim2.pos.x,c2h*0.6+anim2.pos.y+(c2h*anim2.wave1.offset)-1,c2w,c2h*0.6)
		ctx2.fillStyle = "#fff"

		ctx2.fillRect(-c2w+anim2.pos.x,anim2.pos.y+(c2h*anim2.wave1.offset),c2w,c2h*0.6)
		ctx2.fillRect(anim2.pos.x-0.5*c2w,anim2.pos.y,c2w*1.5,c2h*anim2.wave1.offset)



		ctx2.drawImage(imgs[3],anim2.pos.x,mouse.y*-c2h*0.07,c2w,c2h)
		ctx2.drawImage(imgs[3],-c2w+anim2.pos.x,mouse.y*-c2h*0.07,c2w,c2h)
		ctx2.fillRect(0,c2h+(mouse.y*-c2h*0.07)-2,c2w,c2h)



		anim2.pos.x++
		anim2.pos2.x += 0.4
		anim2.pos.y -= (c2h*0.6)/c2w

		if (anim2.pos.x >= c2w) {
			anim2.pos.x = 0
			anim2.pos.y = 0
		}

		if (anim2.pos2.x >= c2w) {
			anim2.pos2.x = 0
		}
		$('#about').css("background-position", "0 "+(-mouse.y)+"vw")

	}

	anim3 = {pos:{x:0,y:0,x1:0,x2:0},pos1:{x:0,y:0}}

	renderFun[3] = function(){
		ctx3.clearRect(0,0,c3w,c3h)
		//console.log('GOOOGLLEE')
		ctx3.drawImage(imgs[7],anim3.pos.x1,0+(-mouse.y*20),c3w,c3h)
		ctx3.drawImage(imgs[7],-c3w+anim3.pos.x1+0.5,0+(-mouse.y*20),c3w,c3h)

		ctx3.drawImage(imgs[6],anim3.pos.x2,0+(-mouse.y*40),c3w,c3h)
		ctx3.drawImage(imgs[6],-c3w+anim3.pos.x2,0+(-mouse.y*40),c3w,c3h)

		
		ctx3.drawImage(imgs[8],anim3.pos.x1,c3h*0.1+(-mouse.y*60),c3w,c3h)
		ctx3.drawImage(imgs[8],-c3w+anim3.pos.x1,c3h*0.1+(-mouse.y*60),c3w,c3h)

		ctx3.drawImage(imgs[5],anim3.pos.x,0+(-mouse.y*80),c3w,c3h)
		ctx3.drawImage(imgs[5],-c3w+anim3.pos.x,0+(-mouse.y*80),c3w,c3h)
		ctx3.fillStyle = "#fff"
		ctx3.fillRect(0,c3h+(-mouse.y*80),c3w,c3h)

		anim3.pos.x++
		anim3.pos.x1+=0.3
		anim3.pos.x2+=0.6

		
		anim3.pos1.x = Math.sin(TIME*0.0001)*(c3w/3)*(0.3*mouse.x+1)+c3w/3
		anim3.pos1.y = Math.cos(TIME*0.0003)*(c3h/3)*(0.3*mouse.y+1)+c3h/6
		ctx3.drawImage(imgs[0],anim3.pos1.x,anim3.pos1.y,c3w/4,c3w/4)
		//console.log(anim3.pos1.x,anim3.pos1.y)


		if (anim3.pos.x>=c3w) {
			anim3.pos.x = 0
		}
		if (anim3.pos.x1>=c3w) {
			anim3.pos.x1 = 0
		}
		if (anim3.pos.x2>=c3w) {
			anim3.pos.x2 = 0
		}

	}

	anim4 = {pos:{x:0,y:0},pos1:{x:0,y:0}}
	renderFun[4] = function(){
		ctx4.clearRect(0,0,c4w,c4h)


		ctx4.drawImage(imgs[9],anim4.pos1.x,-mouse.y*40,c4w,c4h)
		ctx4.drawImage(imgs[9],-c4w+anim4.pos1.x,-mouse.y*40,c4w,c4h)
		

		ctx4.drawImage(imgs[10],anim4.pos.x,-(mouse.y*80)+c4h*0.15,c4w,c4h)
		ctx4.drawImage(imgs[10],-c4w+anim4.pos.x,-(mouse.y*80)+c4h*0.15,c4w,c4h)
		ctx4.fillStyle= "#fff"
		ctx4.fillRect(0,-1.1*c4h+(-mouse.y*40),c3w,c3h)
		console.log(-1.1*c4h+(-mouse.y*40))
		ctx4.fillRect(0,c4h+(-mouse.y*80),c3w,c3h)

		anim4.pos1.x += 0.5
		anim4.pos.x ++

		if (anim4.pos.x>=c4w) {
			anim4.pos.x = 0
		}
		if (anim4.pos1.x>=c4w) {
			anim4.pos1.x = 0
		}

		$('#footer_banner').css({"background-position":"0 "+(-mouse.y*1.5)+"vw"})

	}




	imgs = []

	

	var mouse = {x:0,y:0}

	$( window ).on( "mousemove", function( event ) {
		if (Ww>900) {
    		mouse.x = ( event.clientX / Ww ) * 2 - 1;
			mouse.y = - ( event.clientY /Wh ) * 2 + 1;
			
		}
		//console.log(mouse)
		//mouse_functions[mouse_function_now]();
    });


    $(window).scroll(function(){
		scrt = $(this).scrollTop()
	})
	

	var c1w; var c1h; var c2w; var c2h; var c3w; var c3h; var c4w; var c4h;

	function setSizes(){


		c1w = $('#banner').width()
		c1h = $('#banner').height()

		c2w = $('#about').width()
		c2h = $('#about').height()


		c3w = $('#second_wave').width()
		c3h = $('#second_wave').height()

		c4w = $('#footer_banner').width()
		c4h = $('#footer_banner').height()+2

		if (Ww<900) {
			c1w *= 1.5
			c2w *= 2
			c3w *= 1.5
			c4w *= 1.5
		}

	}

	setSizes()


	
	c1 = document.getElementById('c1')
	c1.width = c1w
	c1.height = c1h
	var ctx1=c1.getContext("2d");

	c2 = document.getElementById('c2')
	c2.width = c2w
	c2.height = c2h+2
	var ctx2=c2.getContext("2d");

	c3 = document.getElementById('c3')
	c3.width = c3w
	c3.height = c3h
	var ctx3=c3.getContext("2d");

	c4 = document.getElementById('c4')
	c4.width = c4w
	c4.height = c4h
	var ctx4=c4.getContext("2d");


	imgs[0] = new Image()
	imgs[0].onload = function(){
		ctx1.drawImage(imgs[0],0,0,c1w/3,c1w/3)
		//ctx1.stroke();
		//console.log('IMG LOADED')
	}

	imgs[0].src = 'img/gp/hole.svg'

	imgs[1] = new Image()
	imgs[1].onload = function(){
		ctx1.drawImage(imgs[1],0,0,c1w/3,c1w/3)
		//ctx1.stroke();
		//console.log('IMG LOADED')
	}
	imgs[1].src = 'img/gp/holefill.svg'

	imgs[2] = new Image()
	imgs[2].onload = function(){
		ctx2.drawImage(imgs[2],0,0,c2w,c2h*0.6)
		//ctx2.stroke();
		console.log('IMG LOADED')
	}
	imgs[2].src = 'img/gp/wave1.svg'

	imgs[3] = new Image()
	imgs[3].onload = function(){
		ctx2.drawImage(imgs[3],0,0,c2w,0)
	}
	imgs[3].src = 'img/gp/wave2.svg'

	imgs[4] = new Image()
	imgs[4].onload = function(){
		ctx2.drawImage(imgs[4],0,0,c2w,c2h)
	}
	imgs[4].src = 'img/gp/wave3.svg'



	imgs[5] = new Image()
	imgs[5].onload = function(){
		ctx3.drawImage(imgs[5],0,0,c3w,c3h)
	}
	imgs[5].src = 'img/gp/wave4.svg'

	imgs[6] = new Image()
	imgs[6].onload = function(){
		ctx3.drawImage(imgs[6],0,0,c3w,c3h)
	}
	imgs[6].src = 'img/gp/wave5.svg'

	imgs[7] = new Image()
	imgs[7].onload = function(){
		ctx3.drawImage(imgs[7],0,0,c3w,c3h)
	}
	imgs[7].src = 'img/gp/wave6.svg'

	imgs[8] = new Image()
	imgs[8].onload = function(){
		ctx3.drawImage(imgs[8],0,0,c3w,c3h)
	}
	imgs[8].src = 'img/gp/wave7.svg'

	imgs[9] = new Image()
	imgs[9].onload = function(){
		ctx4.drawImage(imgs[9],0,0,c4w,c4h)
	}
	imgs[9].src = 'img/gp/wave8.svg'

	imgs[10] = new Image()
	imgs[10].onload = function(){
		ctx4.drawImage(imgs[10],0,0,c4w,c4h)
	}
	imgs[10].src = 'img/gp/wave9.svg'







	stats = $('#stats')
	var timeOld = 0
	time= function(){d=new Date();t=d.getTime();TIME = t;return t}
	function statsCalc(){
		a = time()
		b = a-timeOld
		timeOld = a
		return b
	}

	rfn = 2

	function render(){
		renderFun[rfn]()
		renderFun[1]()
		renderFun[3]()
		renderFun[4]()

		stats.html(statsCalc()+'<br>'+window.innerWidth)
		requestAnimationFrame( render );

	}

	render()


	$(window).resize(function(){
		setSizes()
		c1.width = c1w
	c1.height = c1h
	c2.width = c2w
	c2.height = c2h+2
	c3.width = c3w
	c3.height = c3h
	c4.width = c4w
	c4.height = c4h
	})


/*Content Content Content Content Content Content Content Content Content */

	cardImgs = []
	cardClick = true;
	cardL = $('.textaboutcard').length
	
	for (var i = 0; i < cardL; i++) {
		cardImgs[i] = new Image()
		cardImgs[i].src = "img/cards/card"+i+".png"
	}

	oldCard = 0
	$('#payment button').click(function(){
		id = $(this).parent().index()
		if (oldCard!=id&&cardClick) {
			cardClick = false
			$('.textaboutcard:eq('+oldCard+')').animate({'opacity':0},400,function(){
				$('.textaboutcard').removeClass('visable')
				$('.textaboutcard:eq('+id+')').css('opacity',0).addClass('visable').animate({'opacity':'1'},400,function(){
					oldCard=id
					cardClick = true
				})
			})
			$('.card_photo').animate({'opacity':0},400,function(){
				$(this).css('background-image','url('+cardImgs[id].src+')').animate({'opacity':1})
			})
		}

	})


	banksImgs = []

	for (var i = 0; i < 3; i++) {

		banksImgs[i] = {}

		banksImgs[i].w = new Image()
		banksImgs[i].w.src = 'img/'+(i+5)+'w.png'

		banksImgs[i].b = new Image()
		banksImgs[i].b.src = 'img/'+(i+5)+'.png'

	}

	var displayVis = false
	var  dispalyClick = true 

	$(".wrap2 h3").click(function(){
		if (dispalyClick) {
		
		dispalyClick = false

		read = $(this).attr('read')
		
		$('.wrap2 div').removeClass('blue')
		$(this).parent().parent().parent().parent().parent().addClass('blue')

		var img;

			switch(read){
				case 'ewallets':
					img = 0;
					break;
				case "western":
					img = 1;
					break;
				case "bank":
					img = 2;	
			}
			//alert(img)

			$('.display').animate({'opacity':0},400,function(){

				$(".disptext").removeClass('visable')
				$("#"+read).addClass('visable')
				$('.display .pic').css({'background-image':"url("+banksImgs[img].b.src+")"})

				$('.display').animate({'opacity':1},400,function(){
							dispalyClick = true
				})

			})
		}
	})

	formext = false
	formClick = true

	$('#formToggle').click(function(){
		if (formClick) {
			if (!formext) {
				formClick = false

				$(this).html('back')
				$(this).parent().addClass('back')
				$('.firstform form, .firstform .button p ').css('display','none')
				$('.secondform').css('display','block').animate({'opacity':1},400,function(){
					formClick = true
					formext = true
				})
			}else{
				$('.secondform').animate({'opacity':0},400,function(){
					$(this).css('display','none')
					$('#formToggle').html('or click here').parent().removeClass('back')
						$('.firstform form, .firstform .button p ').css('display','block')
						formext = false

						formClick = true
				})
			}
		}
	})
	var p1cout = 0;
	var p1l = $('.wrap2 div').length
	var panable1 = true
	console.log(p1l)




	function panFun1(dir){
		if (Ww<900&&panable1) {
			panable1 = false
			to = p1cout + dir
			if (to == p1l) {
				to = 0
			}
			if (to==-1) {
				to=p1l-1
			}
			console.log(to)
			$('.wrap2 div:eq('+p1cout+')').animate({'left':-5*dir+'vw','opacity':0},400,function(){
				$(this).css('display','none')
				$('.wrap2 div:eq('+to+')').css({'left':5*dir+'vw','opacity':0,'display':'block'}).animate({'left':0,'opacity':1},400,function(){
					panable1 = true
					p1cout = to
				})
			})
		}
	}

	var panable2 = true
	var p2l = $('.textaboutcard').length
	var p2count = 0
	function panFun2(dir){
		if (Ww<900&&panable2) {
			panable2 = false
			to = p2count + dir

			if (to == p2l) {
				to = 0
			}
			if (to==-1) {
				to=p2l-1
			}

			$('.textaboutcard:eq('+p2count+')').animate({'opacity':0,'left': -5*dir+'vw'},400,function(){
				$('.textaboutcard').removeClass('visable')
				$('.textaboutcard:eq('+to+')').css({'opacity':0,'left':5*dir+'vw'}).addClass('visable').animate({'opacity':'1','left':0},400,function(){
					p2count=to
					panable2 = true
					
				})
			})

			$('.card_photo').animate({'opacity':0,'left':-5*dir+'vw'},400,function(){
				$(this).css({'background-image':'url('+cardImgs[to].src+')','left':5*dir+'vw'}).animate({'opacity':1,'left':0})
			})

		}
	}



		var pan1 = new Hammer(document.getElementById('pan1'));
	pan1.on('panend', function(ev){
			dirraw = ev.additionalEvent
			dir = dirraw=='panright'? -1 : +1

			panFun1(dir)
	})



	var pan2 = new Hammer(document.getElementById('pan2'))
	pan2.on('panend',function(ev){
		dirraw = ev.additionalEvent
		dir = dirraw=='panright'? -1 : +1

		panFun2(dir)
	})


})