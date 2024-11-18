<!DOCTYPE html>
 <html >
	<head>
	<meta charset="utf-8">
	<title>hotel</title>

	<link rel="shortcut icon" href="favicon.ico">
	
	<link rel="stylesheet" href="css/superfish.css">
	
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<link rel="stylesheet" href="css/themify-icons.css">
	
	<link rel="stylesheet" href="css/flaticon.css">
	
	<link rel="stylesheet" href="css/icomoon.css">
	
	<link rel="stylesheet" href="css/flexslider.css">
	
	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>
	
</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">grand</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="index.php">Home</a></li>
							<li>
								<a href="home.php" class="fh5co-sub-ddown">Hotel</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="#">grand Hotel</a></li>
								 	<li><a href="#">Degrand Hotel</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">King Hotel</a>
										
									</li>
									<li><a href="#">Five Star Hotel</a></li> 
								</ul>
							</li>
							<li><a href="services.php">Services</a></li>
							
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slider1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>lotus Hotel</span></p>
		   						<h2>Reserve Room for Family Vacation</h2>
			   					<p>
			   						<a href="login.php" class="btn btn-primary btn-lg">Member login</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slider2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Degrand Hotel</span></p>
		   						<h2>Make Your Vacation Comfortable</h2>
			   					<p>
			   						<a href="login.php" class="btn btn-primary btn-lg">Member login</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slider3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>grand Hotel</span></p>
		   						<h2>A Best Place To Enjoy Your Life</h2>
			   					<p>
			   						<a href="login.php" class="btn btn-primary btn-lg">Member login</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	
		  	</ul>
	  	</div>
	</aside>
	<div class="wrap">
		<div class="container">
			<div class="row">
				<div id="availability">
					<form action="#">

						<div class="a-col">
							<section>
								<select class="cs-select cs-skin-border">
									<option value="" disabled selected>Select Hotel</option>
									<option value="email">grand Hotel</option>
									<option value="twitter">Degrand Hotel</option>
									<option value="linkedin">Five Star Hotel</option>
								</select>
							</section>
						</div>
						<div class="a-col alternate">
							<div class="input-field">
								<label for="date-start">Check In</label>
								<input type="text" class="form-control" id="date-start" />
							</div>
						</div>
						<div class="a-col alternate">
							<div class="input-field">
								<label for="date-end">Check Out</label>
								<input type="text" class="form-control" id="date-end" />
							</div>
						</div>
						<div class="a-col action">
							<a href="checkin.php">
								<span>Check</span>
								Availability
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-counter-section" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="20356" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">User Access</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Hotels</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="8200" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Transactions</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Rating &amp; Review</span>
				</div>
			</div>
		</div>
	</div>

	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Featured Hotels</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(images/hotel_feture_1.jpg);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>RS.2500/night</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>Degrand Hotel</h3>
						<p>A hotel is an establishment that provides paid lodging on a short-term basis.
						Facilities provided may range from a modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a refrigerator and other kitchen facilities, upholstered chairs, a flatscreen television and en-suite bathrooms. Small, lower-priced hotels may offer only the most basic guest services and facilities. Larger, higher-priced hotels may provide additional guest facilities such as a swimming pool, business centre (with computers, printers and other office equipment), childcare, conference and event facilities, tennis or basketball 
						courts, gymnasium, restaurants, day spa and social function services. </p>
						<p><a href="checkin.php" class="btn btn-primary btn-grand-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(images/hotel_feture_2.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>RS.2400/night</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>Hotel lotus</h3>
							<p>Hotel operations vary in size, function, complexity, and cost. Most hotels and major hospitality companies have set industry standards to classify hotel types.</p>
							<p><a href="checkin.php" class="btn btn-primary btn-grand-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url(images/hotel_feture_3.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>RS.2400/night</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>D’Morvie</h3>
							<p>Hotel operations vary in size, function, complexity, and cost. Most hotels and major hospitality companies have set industry standards to classify hotel types.  </p>
							<p><a href="checkin.php" class="btn btn-primary btn-grand-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="hotel-facilities">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Hotel Facilities</h2>
					</div>
				</div>
			</div>

			<div id="tabs">
				<nav class="tabs-nav">
					<a href="#" class="active" data-tab="tab1">
						<i class="flaticon-restaurant icon"></i>
						<span>Restaurant</span>
					</a>
					<a href="#" data-tab="tab2">
						<i class="flaticon-cup icon"></i>
						<span>Bar</span>
					</a>
					<a href="#" data-tab="tab3">
					
						<i class="flaticon-car icon"></i>
						<span>Pick-up</span>
					</a>
					<a href="#" data-tab="tab4">
						
						<i class="flaticon-swimming icon"></i>
						<span>Swimming Pool</span>
					</a>
					<a href="#" data-tab="tab5">
						
						<i class="flaticon-massage icon"></i>
						<span>Spa</span>
					</a>
					<a href="#" data-tab="tab6">
						
						<i class="flaticon-bicycle icon"></i>
						<span>Gym</span>
					</a>
				</nav>
				<div class="tab-content-container">
					<div class="tab-content active show" data-tab-content="tab1">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_1.jpg" class="img-responsive" alt="Image" style="height:500px;">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Restaurant</h3>
									<p>A restaurant or an eatery, is a business which prepares and serves food and drinks to customers in exchange for money. Meals are generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services, and some offer only take-out and delivery.</p>
									<p>most mid- to high-range restaurants serve alcoholic beverages such as beer and wine. Some restaurants serve all the major meals, such as breakfast, lunch, and dinner (e.g., major fast food chains, diners, hotel restaurants, and airport restaurants). Other restaurants may only serve a single meal (e.g., a pancake house may only serve breakfast) or they may serve two meals (e.g., lunch and dinner) or even a kids' meal.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab2">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_2.jpg" class="img-responsive" alt="Image"  style="height:500px;">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Bars</h3>
									<p>A bar (also known as a saloon or a tavern or sometimes a pub or club, referring to the actual establishment, as in pub bar or savage club etc.) is a retail business establishment that serves alcoholic beverages, such as beer, wine, liquor, cocktails, and other beverages such as mineral water and soft drinks and often sell snack foods such as crisps (potato chips) or peanuts, for consumption on premises.[1] Some types of bars, such as pubs, may also serve food from a restaurant menu. The term "bar" also refers to the countertop and area where drinks are served. The term "bar" is also derived from the metal or wooden bar that is often located at feet along the length of the bar.</p>
									<p>Bars provide stools or chairs that are placed at tables or counters for their patrons. Bars that offer entertainment or live music are often referred to as music bars, live venues, or nightclubs.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab3">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_3.jpg" class="img-responsive" alt="Image" style="height:500px;">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Pick Up</h3>
									<p>ffers our customers a wide variety of pick-up and delivery options to meet any budget. Our flexible services allow us to pick-up at a business or residential address or our customers can choose to drop off their items at one of our nationwide warehouse locations.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab4">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_4.jpg" class="img-responsive" alt="Image"  style="height:500px;">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Swimming Pool</h3>
									<p>A swimming pool service technician is a tradesperson who cleans swimming pools and services major pool equipment such as pumps, motors, and filters. Description[edit]. Within the swimming pool and spa industry, these tradesmen are also known as "pool and spa service professionals" .	</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab5">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_5.jpg" class="img-responsive" alt="Image" style="height:500px;">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Spa</h3>
									<p>Spas by Banyan Tree provide a serene and truly unforgettable experience of pure pampering and relaxation in exquisitely beautiful surroundings, using holistic therapies and massages which more.. Having a definite quality management system, we are regarded as the noteworthy service provider of Water SPA Services.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab6">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="images/tab_img_6.jpg" class="img-responsive" alt="Image" style="height:500px;">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Gym</h3>
									<p>PERSONAL TRAINING Muscle your way towards confidence. Let us help you achieve results through our Private Trainers' resilient commitment and tireless effort. Our private trainers specialize in teaching practices that will improve your overall health and lead you towards a more sustainable life.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container bg-grey">
<h2 class="text-center">
  REVIEWS</h2><br><br>
<?php
$conn= new mysqli('localhost','root','','hotel');
			if($conn)
			{
 				$select="SELECT * FROM `hotel`.`comment`";
					$result=$conn->query($select);
					if($result->num_rows>0)
					{echo '<table class="table table-striped table-responsive">';
						
						while($row=$result->fetch_assoc())
						{
							
							$x=$row['ID'];
							echo"<tr><td><b>";
							echo $row["name"].":</b>". $row["date"]."<br><br>";
							
							echo $row["comments"]."<br><br>";
							
							
							echo"
							
						<form action='delete.php' method='post'>
						<button class='btn btn-default pull-right' type='submit'
						name='sub' value="."$x".">delete</button>
						</form>";
						
					
						}
						
						echo'</table>';
					}
			}else
			{
				echo "not connected";
			}
?>
</div>
 

	<div id="testimonial">
		<div class="container">

  <h2 class="text-center" style="color:white;">
	<div id="contact">
  CONTACT</h2><br><br>
  <div class="row">
    <div class="col-sm-5" >
      <p style="color:white;">Contact us and we'll get back to you within 24 hours.</p>
      <p style="color:white;"><span class="glyphicon glyphicon-map-marker"></span> Hotel</p>
      <p style="color:white;"><span class="glyphicon glyphicon-phone"></span> +91 9015571475</p>
      <p style="color:white;"><span class="glyphicon glyphicon-envelope"></span> ksmv29muskan@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
	  		<form action="comment.php" method="post">
	        <div class="col-sm-6 form-group">
	          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
	        </div>
	        <div class="col-sm-6 form-group">
	          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
	        </div> 
	        
        	<div class="col-sm-12 form-group">
      		<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      		</div>
      		
        	<div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" name="sub">Send</button>
          </div>
          
		  	</form>
       </div>
    </div>
    </div>
    </div>
  </div>
</div>

		</div>
	</div>


	<div id="fh5co-blog-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Our Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(images/image-1.jpg);">
						<div class="date text-center">
							<span>09</span>
							<small>Aug</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Most Expensive Hotel</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(images/image-2.jpg);">
						<div class="date text-center">
							<span>09</span>
							<small>Aug</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">1st Anniversary of grand Hotel</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(images/image-3.jpg);">
						<div class="date text-center">
							<span>09</span>
							<small>Aug</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Discover New Adventure</a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p>
						Designed & Developed by <a href="index.php" title="hotel" >
						Muskan Bartaria</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="#">Resturant</a></li>
								<li><a href="#">Bars</a></li>
								<li><a href="#">Pick-up</a></li>
								<li><a href="#">Swimming Pool</a></li>
								<li><a href="#">Spa</a></li>
								<li><a href="#">Gym</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Subscribe</h3>
							
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="#"><i class="icon-twitter-with-circle"></i></a>
							<a href="#"><i class="icon-facebook-with-circle"></i></a>
							<a href="#"><i class="icon-instagram-with-circle"></i></a>
							<a href="#"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	</div>
	<script src="js/jquery-2.1.4.min.js"></script>

	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/jquery.countTo.js"></script>
	
	<script src="js/jquery.stellar.min.js"></script>
	
	<script src="js/bootstrap-datepicker.min.js"></script>
	
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/custom.js"></script>

</body>
</html>