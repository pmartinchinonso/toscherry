<?php 
	//active class assignment
	$home_active = "menu-active";
	$about_active = "";
	$team_active = "";
	$products_active = "";
	$contact_active = "";
	
	//title page assignment
	$page_title = "Home of Quality Electronics and Plastics";
	include('connect_toscherry.php');
?>
<!doctype html>
<html>
<head>
	<!--==========================
      head lib include
    ============================-->
	<?php include('toscherry_head_lib.php');?>
    
</head>

<body>
	<!--==========================
      Mobilenav include
    ============================-->
    <?php include('toscherry_mobilenav.php');?>
	
    <!--==========================
      Hero Section
    ============================-->
      <section id="hero">
      	<div id="loader-wrapper">
			<div id="loader"><img class="" src="img/toscherry_logo.png" alt="Toscherry"  width="150"></div>
            
            <div class="loader-section section-left"></div>
    		<div class="loader-section section-right"></div>
		</div>
        
        
      	<ul class="cb-slideshow">
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
        </ul>
        <div class="hero-container">
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <div class="hero-logo">
              <img class="" src="img/toscherry_logo.png" alt="Toscherry">
            </div>
            
            <h1>Welcome to <span class="tos">Toscherry Ltd, Toscherry Ltd</span></h1>
            <h2>Home of <span class="rotating">original computers and printers, exotic outdoor plastics, luxurious Bathroom accessories</span></h2>
            <div class="actions">
              <a href="#we_offer" class="btn-get-started wow zoomInLeft pulse" data-wow-duration="1s" data-wow-delay="2s">Navigate Products</a>
              <a href="#subscribe" class="btn-services wow zoomInRight" data-wow-duration="1s" data-wow-delay="2s">Subscribe</a>
            </div>
          </div>
        </div>
      </section>
      
	<!--==========================
      Header Section
    ============================-->
    <?php include('toscherry_header.php');?>
      
    <!--==========================
      We offer Section
    ============================-->
    <section id="we_offer">
    	<div class="container ">
        	<div class="row">
                <div class="col s12">
                    <h3 class="section_title">What we offer</h3>
                    <div class="section_title_divider"></div>
                    <p class="section_desc">We will provide you with quality goods on guarranty</p>
                </div>
            </div>
        </div>
        <div class="container">
        	<div class="row">
            	<div class="we_offer_items_container col xl3 l4 m6 s12 wow fadeInUp">
                	<div class="we_offer_items  z-depth-1-half">
                    	<div><img class="materialboxed img_container" data-caption="Quality laptop" src="img/laptop2.jpg" width="90%" height="100%"></div>
                        <h5>Original Computers</h5>
                        <p class="we_offer_details">
                        	We have original durable laptops of different brands, specifications, sizes and classes. 
                            It comes with a guarranty from the branding company. Click the button below to see more of what 
                            we have.
                        </p>
                        <a href="computers.php" class="btn-get-started wow tada pulse" data-wow-duration="1s">See more</a>
                    </div>
                </div>
                
                <div class="we_offer_items_container col xl3 l4 m6 s12 wow fadeInUp" data-wow-delay="400ms">
                	<div class="we_offer_items  z-depth-1-half">
                    	<div><img class="materialboxed img_container" data-caption="Original printer" src="img/hp_laser_jet_pro_m1136.jpg" width="90%" height="100%"></div>
                        <h5>Original Printers</h5>
                        <p class="we_offer_details">
                        	We have original durable laptops of different brands, specifications, sizes and classes. 
                            It comes with a guarranty from the branding company. Click the button below to see more of what 
                            we have.
                        </p>
                        <a href="printers.php" class="btn-get-started wow tada pulse" data-wow-duration="1s">See more</a>
                    </div>
                </div>
                
                <div class="we_offer_items_container col xl3 l4 m6 s12 wow fadeInUp" data-wow-delay="700ms">
                	<div class="we_offer_items  z-depth-1-half">
                    	<div><img class="materialboxed img_container" data-caption="Long lasting quality chair" src="img/plastics3.jpg" width="90%" height="100%"></div><br>
                        <h5>Exotic Plastics</h5>
                        <p class="we_offer_details">
                        	We have original durable laptops of different brands, specifications, sizes and classes. 
                            It comes with a guarranty from the branding company. Click the button below to see more of what 
                            we have.
                        </p>
                        <a href="plastics.php" class="btn-get-started wow tada pulse" data-wow-duration="1s">See more</a>
                    </div>
                </div>
                
                <div class="we_offer_items_container col xl3 l4  m6 s12 wow fadeInUp" data-wow-delay="1s">
                	<div class="we_offer_items  z-depth-1-half">
                    	<div><img class="materialboxed img_container" data-caption="Bathroom sink" src="img/sink.jpg" width="90%" height="100%"></div>
                        <h5>Bathroom Solutions</h5>
                        <p class="we_offer_details">
                        	We have original durable laptops of different brands, specifications, sizes and classes. 
                            It comes with a guarranty. Click the button below to see more of what 
                            we have.
                        </p>
                        <a href="gadgets.php" class="btn-get-started wow tada pulse" data-wow-duration="1s">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--==========================
      Latest Section
    ============================-->
    <section id="latest_computers">
    	<div class="container wow fadeInUp">
        	<div class="row">
                <div class="col s12">
                    <h3 class="section_title">Latest Computers</h3>
                    <div class="section_title_divider"></div>
                    <p class="section_desc">Below are the latest trending laptops</p>
                </div>
            </div>
        </div>
        <div class="container">
        	<div class="row">
            	<div class="latest_items_container col l4 m6 s12 wow fadeInUp">
                	<div class="latest_items  z-depth-1-half">
                    	<div class="img_container"><img class="materialboxed img_container" data-caption="Apple MacBook Pro" src="img/Apple_MacBook_Pro.jpg" width="90%" height="100%"></div>
                        <h5>Apple MacBook Pro</h5>
                        <p class="latest_details">
                        	&#8226; 13.3-inch LED-backlit display with IPS technology, 2560-by-1600 native resolution at 227 pixels per inch.<br>
                            &#8226; 2.9GHz dual-core sixth-gen Intel Core i5 processor.<br>
                            &#8226; Intel Iris Graphics 550.<br>
                            &#8226; 8GB of RAM.<br>
                            &#8226; 256GB SSD.<br>
                            &#8226; 4 x Thunderbolt port.<br>
                            &#8226; Touch Bar with Touch ID.
                        </p>
                        
                    </div>
                </div>
                
                <div class="latest_items_container col l4 m6 s12 wow fadeInUp" data-wow-delay="400ms">
                	<div class="latest_items  z-depth-1-half">
                    	<div class="img_container"><img class="materialboxed img_container" data-caption="HP Spectre x360" src="img/HP_Spectre_x360.jpg" width="90%" height="100%"></div>
                        <h5>HP Spectre x360</h5>
                        <p class="latest_details">
                        	&#8226; CPU: 2.2GHz Intel Core i5-5200 (dual-core, 3MB cache, up to 2.7GHz with Turbo Boost.<br>
                            &#8226; Graphics: Intel HD Graphics 5500.&#8226; RAM: 8GB DDR3 (1600Mhz).<br>
                            &#8226; Screen: 13.3-inch, 1,920 x 1,080 FHD Radiance LED-backlit touchscreen.<br>
                            &#8226; Storage: 256GB SSD.<br>
                            &#8226; Ports: 3x USB 3.0; HDMI, mini DisplayPort, headphone/microphone combo.
                        </p>
                        
                    </div>
                </div>
                
                <div class="latest_items_container col l4 m6 s12 wow fadeInUp" data-wow-delay="700ms">
                	<div class="latest_items  z-depth-1-half">
                    	<div class="img_container"><img class="materialboxed img_container" data-caption="Lenovo Thinkpad X1 Yoga" src="img/Lenovo-Thinkpad-X1-Yoga.jpg" width="90%" height="100%"></div>
                        <h5>Lenovo Thinkpad X1 Yoga</h5>
                        <p class="latest_details">
                        	&#8226; Screen: 14" WQHD (2560 x 1440) Multitouch.<br>
                            &#8226; CPU: Up to 6th Generation Intel® Core™ i7-6600U Processor (2.60GHz 4MB).<br>
                            &#8226; Memory: Up to 16GB LPDDR3 1600 MHz.<br>
                            &#8226; Storage: Up to 512GB SSD.<br>
                            &#8226; Connectivity: Intel® Wireless-8260 AC (2x2).<br>
                            &#8226; Bluetooth®: Bluetooth® 4.1
                        </p>
                        
                    </div>
                </div>
                
            </div>
            <a href="computers.php" class="see_more_btn wow flash pulse" data-wow-iteration="infinite" data-wow-duration="1s">See more</a>
        </div>
    </section>
    
    <section id="latest_printers">
    	<div class="container wow fadeInUp">
        	<div class="row">
                <div class="col s12">
                    <h3 class="section_title">Latest Printers</h3>
                    <div class="section_title_divider"></div>
                    <p class="section_desc">Below are the latest trending printers</p>
                </div>
            </div>
        </div>
        <div class="container">
        	<div class="row">
            	<div class="latest_items_container col l4 m6 s12 wow fadeInUp">
                	<div class="latest_items  z-depth-1-half">
                    	<div class="img_container"><img class="materialboxed img_container" data-caption="Apple MacBook Pro" src="img/HP_ENVY_5664-All-in-One_Photo_Printer.jpg" width="90%" height="100%"></div>
                        <h5>HP ENVY 5664 All-in-One Photo Printer</h5>
                        <p class="latest_details">
                        	
                        </p>
                        
                    </div>
                </div>
                
                <div class="latest_items_container col l4 m6 s12 wow fadeInUp" data-wow-delay="400ms">
                	<div class="latest_items  z-depth-1-half">
                    	<div class="img_container"><img class="materialboxed img_container" data-caption="HP Spectre x360" src="img/hp_laserjet_700.jpg" width="90%" height="100%"></div>
                        <h5>HP LaserJet 700 Printer</h5>
                        <p class="latest_details">
                        	
                        </p>
                        
                    </div>
                </div>
                
                <div class="latest_items_container col l4 m6 s12 wow fadeInUp" data-wow-delay="700ms">
                	<div class="latest_items  z-depth-1-half">
                    	<div class="img_container"><img class="materialboxed img_container" data-caption="Lenovo Thinkpad X1 Yoga" src="img/Epson_WorkForce_WF-2750.jpg" width="90%" height="100%"></div>
                        <h5>Epson WorkForce WF-2750</h5>
                        <p class="latest_details">
                        	
                        </p>
                        
                    </div>
                </div>
                
            </div>
            <a href="printers.php" class="see_more_btn wow flash pulse" data-wow-iteration="infinite" data-wow-duration="1s">See more</a>
            
        </div>
    </section>

    <section id="latest_plastics">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col s12">
                    <h3 class="section_title">Exotic Outdoor Plastics</h3>
                    <div class="section_title_divider"></div>
                    <p class="section_desc">Below are the latest trending plastics</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="latest_items_container col l4 m6 s12 wow fadeInUp">
                    <div class="latest_items  z-depth-1-half">
                        <div class="img_container"><img class="materialboxed img_container" data-caption="Altak Ranoush" src="img/plastics/altak_ranoush.jpg" width="90%" height="100%"></div>
                        <h5>Altak Ranoush</h5>
                        <p class="latest_details">
                            
                        </p>
                        
                    </div>
                </div>
                
                <div class="latest_items_container col l4 m6 s12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="latest_items  z-depth-1-half">
                        <div class="img_container"><img class="materialboxed img_container" data-caption="Altak Student Table" src="img/plastics/altak_student_table.jpg" width="90%" height="100%"></div>
                        <h5>Altak Student Table</h5>
                        <p class="latest_details">
                            
                        </p>
                        
                    </div>
                </div>
                
                <div class="latest_items_container col l4 m6 s12 wow fadeInUp" data-wow-delay="700ms">
                    <div class="latest_items  z-depth-1-half">
                        <div class="img_container"><img class="materialboxed img_container" data-caption="Lenovo Thinkpad X1 Yoga" src="img/plastics/eleganza_partytime.jpg" width="90%" height="100%"></div>
                        <h5>Eleganza Party time</h5>
                        <p class="latest_details">
                            
                        </p>
                        
                    </div>
                </div>
                
            </div>
            <a href="plastics.php" class="see_more_btn wow flash pulse " data-wow-iteration="infinite" data-wow-duration="1s">See more</a>
            
        </div>
    </section>
    
    <!--==========================
      Subscribe Section
    ============================-->
    
    <section id="subscribe">
    	<div class="container wow fadeInUp">
        	<div class="row">
                <div class="col s12 m12 l7 wow fadeInLeft">
                    <h5>Subscribe For Updates</h5>
                    <p>Join our 1000+ subscribers and get notified of the latest trending technology,new goods, product announcements and much more!</p>
                </div>
                
                <div class="col s12 m12 l5 wow fadeInRight">
                    <form class="col s12" id="subscribe_form" method="post">
                      <div class="row">
                        <div class="input-field">
                        	<i class="material-icons prefix">email</i>
                          <input id="subscribe_email" type="email" class="validate" name="email" required>
                          <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                      </div>
                      
                      <div class="row">
                      	  <button class="btn waves-effect waves-light btn-flat" type="submit" id="submit_email" >Sign up
                            <i class="material-icons right">send</i>
                          </button>
                          <p id='success_message'></p>
                      </div>
                    </form>	
                </div>
            </div>
        </div>
    </section>
    
	<!--footer include-->
	<?php include('toscherry_footer.php'); ?>
	<!--Js include-->
	<?php include('toscherry_js_lib.php'); ?>

</body>
</html>