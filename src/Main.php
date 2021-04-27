<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome | PfN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="image/yurt.ico">
  	<link rel="stylesheet" type="text/css" href="css/Main.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<section class="">
		<h3 id="text">POST FOR NOMAD</h3> 
		<img src="image/bg.png" id="bg">  
		<img src="image/area.png" id="area">
		<img src="image/yurt.png" id="yurt">
		<img src="image/pfn.png" id="pfn">   
	</section>
	<script type="text/javascript">
		let bg = document.getElementById("bg");
		let area = document.getElementById("area");
		let yurt = document.getElementById("yurt");
		let pfn = document.getElementById("pfn");
		let text = document.getElementById("text");

		window.addEventListener('scroll' , function(){
			var value = window.scrollY;

			bg.style.top = value * 1 + 'px';
			pfn.style.top = value * 0.5 + 'px';
			text.style.top = -value * 0.5 + 'px';
			yurt.style.top = value * 0.5 + 'px';

		})
	</script>
	<body data-spy="scroll" data-target="#myScrollspy" data-offset="205">

<div class="container-fluid" style="background-color: #FFC300;color:#666;height:320px; ">
  <h1>Post For Nomad</h1>
  <h3>About Company</h3>
  <ul style="padding: 15px">
  	<li>Express delivery of documents, parcels and cargo to any point of Kazakhstan<br>at favorable rates and in the shortest possible time.</li>
  	<li>Transportation of heavy and bulky cargo in Kazakhstan<br>and the countries of the near and far abroad.</li>
  	<li>A complete solution for the delivery of goods to customers<br>for online stores and remote trading companies</li>
  	<li>International delivery of documents, parcels, and cargo,<br>including heavy, prefabricated, and oversized cargo.</li>
  	<li>Special rates for corporate clients.</li>
  </ul>
</div>
<div class="container">
	<div class="row justify-content-center">
<h2 style="border: 5px solid #FFC300; text-align: center; border-radius: 10px;">Featured PFN<sup>®</sup> Products & Services</h2>
</div>
	<div class="box">
		<div class="imgBx">
			<img src="image/laptop.png">
		</div>
		<div class="contentBx">
			<h2>Information about parcel ® Track</h2>
			<p>You can get full information about the package by using the track issued to you when ordering.Just click on the button.</p>
			<a href="track.php"><button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Track</button></a>
		</div>
	</div>
	<div class="box">
		<div class="imgBx">
			<img src="image/mail.png">
		</div>
		<div class="contentBx">
			<h2>Order delivery parcel</h2>
			<p>Fill all needed fiealds and make new order for you manage. Just click on the button.</p>
			<a href="order.php"><button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Order</button></a>
		</div>
	</div>
	<div class="box">
		<div class="imgBx">
			<img src="image/webpg.png">
		</div>
		<div class="contentBx">
			<h2>Every Door Direct Mail® Services</h2>
			<p>
Team up with PFN to get your business promotions and advertisements to your target customers.</p>
		</div>
	</div>
	<div class="box">
		<div class="imgBx">
			<img src="image/socialm.png">
		</div>
		<div class="contentBx">
			<h2>Social media</h2>
			<p>We also have social media accounts.Just click on the button.</p>
			<button type="submit" class="btn mt-1 rounded-pill btn-lg btn-custom btn-block text-uppercase">Click</button>
		</div>
	</div>
	<div class="box">
		<div class="imgBx">
			<img src="image/phone2.png">
		</div>
		<div class="contentBx">
			<h2>Soon...</h2>
			<p>Applications for the mobile version will be developed soon and it will be twice as convenient to use our service.</p>
		</div>
	</div>
	<div class="row justify-content-center">
<h2>Our service also has various bonuses for certain achievements</h2>
</div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="image/t-shirt.png" alt="t-shirt">
    </div>

    <div class="item">
      <img src="image/notebook.png" alt="notebook">
    </div>
    <div class="item">
      <img src="image/bonus.png" alt="New York">
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="panel-footer">
	<h3>Our priority is you ®<p>
The PFN uses private postal and transport services. Easy access to our online tools and to send goods from home. Also, stay up to date with the latest news on the impact of the COVID-19 service and frequently asked questions.</p></h3>
    	<h3>CONTACT US :</h3>
    		<div class="p1">
    	 	<p><span style="color: #FFC300">General Designer</span> : Erkanat Abdul-Madi</p>
         	<p>madi20.08@mail.ru</p>
         	<p>8 775 227 65 51</p>
    		</div>

    		<div class="p2">
    		<p><span style="color: #FFC300">Designer </span>: Sadykov Madikhan</p>
         	<p>sssadykoff@mail.ru</p>
         	<p>8 706 407 73 66</p>
    		</div>
	</div>
<script type="text/javascript" src="vanilla-tilt.babel.js"></script>
<script type="text/javascript" src="vanilla-tilt.babel.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".box"), {
		max: 25,
		speed: 500
	});
</script>
</body>
</html>