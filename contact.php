<?php 
	//active class assignment
	$home_active = "";
	$about_active = "";
	$team_active = "";
	$products_active = "";
	$contact_active = "menu-active";
	
	//title page assignment
	$page_title = "Computers";
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
    
    <section id="map">
    	<div class="">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1103.4263616584287!2d7.49273769305775!3d6.426879107810465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a16494be87b3%3A0xfbd9e8d7a5895bc5!2sToscherry!5e1!3m2!1sen!2sng!4v1509094098075" width="100%" height="600" frameborder="0" style="border:2px solid #03C4EB;" allowfullscreen></iframe>
        </div>
    </section>
    <section id="contact">
    	<div class="row">
        	<div class="write_us col s12 l7 m7 wow fadeInUp">
            	<h3 class="section_title">Write us</h3>
                <div class="section_title_divider"></div>
                
                <form class="col s12" id="contact_form" method="post">
                	<div class="row">
                    	<div class="input-field col s12 m6 l6">
                          <i class="material-icons prefix">person</i>
                          <input id="first_name" type="text" class="validate" required>
                          <label for="first_name">Your Name</label>
                        </div>
                    
                  
                    	<div class="input-field col s12 m6 l6">
                          <i class="material-icons prefix">email</i>
                          <input id="contact_email" type="email" class="validate" required>
                          <label for="email" data-error="wrong" data-success="right">Email</label>
                    	</div>
                  </div>
                  <div class="row">
                    	<div class="input-field col s12 ">
                          <i class="material-icons prefix">subject</i>
                          <input id="contact_subject" type="text" class="validate" required>
                          <label for="email" data-error="wrong" data-success="right">Subject</label>
                    	</div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 ">
                    	<i class="material-icons prefix">message</i>
                      <textarea id="contact_message" class="materialize-textarea" required></textarea>
                      <label for="textarea1">Your Message</label>
                    </div>
                  </div>
                  
                  <div class="row">
                      <button class="btn waves-effect waves-light btn-flat" type="submit" name="action">Send
                        <i class="material-icons right">send</i>
                      </button>
                      <p id='success_contact_message'></p>
                  </div>
                </form>
            </div>
            <div class="contact_info col s12 l5 m5 wow fadeInUp">
            	<h3 class="section_title">Contact Info</h3>
                <div class="section_title_divider"></div>
            	Have any Queries? Let us know. We will clear it for you at the best.<br><br>
            	<p>
                	<i class="material-icons prefix">location_on</i> 41 ziks Avenue Uwani Enugu<br><br>
                    <i class="material-icons prefix">local_phone</i> 08030701890, 08151252410<br><br>
                    <i class="material-icons prefix">local_post_office</i> toscherry@hotmail.com<br><br>
                    <i class="material-icons prefix">local_post_office</i> toscherry@yahoo.com<br>
                </p>
            </div>
        </div>
    </section>
    
	<!--footer include-->
	<?php include('toscherry_footer.php'); ?>
	<!--Js include-->
	<?php include('toscherry_js_lib.php'); ?>    
</body>
</html>