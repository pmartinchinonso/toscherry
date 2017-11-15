<?php 
	//active class assignment
	$home_active = "";
	$about_active = "menu-active";
	$team_active = "";
	$products_active = "";
	$contact_active = "";
	
	//title page assignment
	$page_title = "About Us";
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
      Header Section
    ============================-->
    <?php include('toscherry_header.php');?>
    

    <section id="about_us">
      <div class="container wow fadeInUp">
          <div class="row">
                <div class="col s12">
                    <h3 class="section_title">About Us</h3>
                    <div class="section_title_divider"></div>
                    
                </div>
            </div>
        </div>
        <div class="container">
    	    Toscherry is a business portal that connects customers to their targeted markets. It is also a subsidiary of Tochris Technology Ltd that offers a broad range of business solutions and retail services. Our core interest areas are sales and maintenance of computers and accessories, security devices, plastic chairs and outdoor furnitures. 
        </div>
      </div>
    </section>
    <section id="quality_sect">
      <h5>Your satisfaction is our utmost concern</h5>
      
    </section>
    <section id="about_us">
      <div class="container wow fadeInUp">
      Within the last 3 years of our corporate existence, we have successfully registered ourselves as a household brand especially at Enugu metropolis where we offer classic and unequal finesse of professional services to our ever teeming customers and clientele database.
      </div>
      <div class="ceo_sect">
        <div class="img_container"><img src="img/ceo.jpg" width="250"></div>
        <div class="name">
          <p>Tochukwu Louis Uchendu <br><span id="ceo_post">CEO/Manager Toscherry Ltd.</span></p>
          <a href="https://www.facebook.com/profile.php?id=1008878607" target="_blank"><img src="img/social_facebook.png" width="25px"> </a> &nbsp;
          <a href="https://www.instagram.com/toscherry/" target="_blank"><img src="img/social_instagram.png" width="25px"></a>
       </div> 
      </div>
    </section>
    
	<!--footer include-->
	<?php include('toscherry_footer.php'); ?>
	<!--Js include-->
	<?php include('toscherry_js_lib.php'); ?>    
</body>
</html>