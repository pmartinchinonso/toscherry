<?php
	//active class assignment
	$home_active = "";
	$about_active = "";
	$team_active = "";
	$products_active = "menu-active";
	$contact_active = "";
	
	//title page assignment
	$page_title = "Upload goods";
	
	include("../connect_toscherry.php");
	
	if(isset($_COOKIE["cookie"]))$admin_id = $_COOKIE["cookie"]; else header("location:  index.php");
	
	//submit computers
	if(isset($_POST['submit_computer'])){
		$name = $_POST['name_computer'];
		$desc = $_POST['desc_computer'];
		$img = $_FILES['image_computer']['name'];
		$img_path = '../img/laptops/'.$img;
		move_uploaded_file($_FILES['image_computer']['tmp_name'], $img_path);
		
		$insert = mysqli_query($connect, "insert into computers values('', '$name', '$img', '$desc')");
			if($insert){ $feedback = "Computer added succesfully";} else{ $feedback = "Couldn\'t upload".mysqli_error();}
		$act_comp = 'active';
		$act_print = '';
		$act_plast = '';
		$act_gadg = '';
	}
	
	//submit printers
	if(isset($_POST['submit_printer'])){
		$name = $_POST['name_printer'];
		$img = $_FILES['image_printer']['name'];
		$img_path = '../img/printers/'.$img;
		move_uploaded_file($_FILES['image_printer']['tmp_name'], $img_path);
		
		$insert = mysqli_query($connect, "insert into printers values('', '$name', '$img')");
			if($insert){ $feedback = "Printer added succesfully";} else{ $feedback = "Couldn\'t upload".mysqli_error();}
		$act_comp = '';
		$act_print = 'active';
		$act_plast = '';
		$act_gadg = '';
	}
	
	//submit plastics
	if(isset($_POST['submit_plastic'])){
		$name = $_POST['name_plastic'];
		$img = $_FILES['image_plastic']['name'];
		$img_path = '../img/plastics/'.$img;
		move_uploaded_file($_FILES['image_plastic']['tmp_name'], $img_path);
		
		$insert = mysqli_query($connect, "insert into plastics values('', '$name', '$img')");
			if($insert){ $feedback = "Plastic added succesfully";} else{ $feedback = "Couldn\'t upload".mysqli_error();}
		$act_comp = '';
		$act_print = '';
		$act_plast = 'active';
		$act_gadg = '';
	}
	
	//submit gadgets
	if(isset($_POST['submit_gadget'])){
		$name = $_POST['name_gadget'];
		$desc = $_POST['desc_gadget'];
		$img = $_FILES['image_gadget']['name'];
		$img_path = '../img/gadgets/'.$img;
		move_uploaded_file($_FILES['image_gadget']['tmp_name'], $img_path);
		
		$insert = mysqli_query($connect, "insert into gadgets values('', '$name', '$img', '$desc')");
			if($insert){ $feedback = "Gadget added succesfully";} else{ $feedback = "Couldn\'t upload".mysqli_error();}
		$act_comp = '';
		$act_print = '';
		$act_plast = '';
		$act_gadg = 'active';
	}
	
	
?>
<!doctype html>
<html>
<head>
	<!--==========================
      head lib include
    ============================-->
	<?php include('toscherry_head_lib.php');?>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/richtext.min.css" type="text/css">
    
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
    
	<section id="latest_computers">
    	<div class="container wow fadeInUp">
        	<div class="row">
                <div class="col s12">
                    <h3 class="section_title">Upload goods</h3>
                    <div class="section_title_divider"></div>
                    <!--<p class="section_desc">Below are the latest trending laptops</p>-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12">
                  <ul class="tabs" >
                    <li class="tab col s3"><a class="<?php echo $act_comp;?>" href="#comp">Computers</a></li>
                    <li class="tab col s3"><a class="<?php echo $act_print;?>" href="#print">Printers</a></li>
                    <li class="tab col s3"><a class="<?php echo $act_plast;?>" href="#plastic">Plastics</a></li>
                    <li class="tab col s3"><a class="<?php echo $act_gadg;?>" href="#gadget">Gadgets</a></li>
                  </ul>
                </div>
                <div id="comp" class="col s12">
                	<div class="container">
                    <form method="post" enctype="multipart/form-data">
                    	<div class="row">
                            <div class="input-field col s12 ">
                              
                              <input id="name" type="text" name="name_computer" class="validate" required>
                              <label for="username">Name</label>
                            </div>
                            
                        </div>
                        
                    	<div class="file-field input-field">
                          <div class="btn">
                            <span>Image</span>
                            <input type="file" name="image_computer" required>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                        </div>
                        <div class="row">
                        	<textarea class="content" name="desc_computer" required></textarea>
                        </div>
                        <div class="row">
                          <button class="btn waves-effect waves-light btn-flat" id="computer_btn" type="submit" name="submit_computer">Submit Computer
                            <i class="material-icons right">keyboard_arrow_right</i>
                          </button>
                        </div>
                        <div id="feedback">
                        	<?php if(isset($feedback)) echo $feedback;?>
                        </div>
                    </form>
                    </div>
                </div>
                <div id="print" class="col s12">
                	<div class="container">
                    <form method="post" enctype="multipart/form-data">
                    	<div class="row">
                            <div class="input-field col s12 ">
                              
                              <input id="name" type="text" name="name_printer" class="validate" required>
                              <label for="username">Name</label>
                            </div>
                            
                        </div>
                        
                    	<div class="file-field input-field">
                          <div class="btn">
                            <span>Image</span>
                            <input type="file" name="image_printer" required>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                        </div>
                        
                        <div class="row">
                          <button class="btn waves-effect waves-light btn-flat" type="submit" name="submit_printer">Submit Printer
                            <i class="material-icons right">keyboard_arrow_right</i>
                          </button>
                        </div>
                        <div id="feedback">
                        	<?php if(isset($feedback)) echo $feedback;?>
                        </div>
                    </form>
                    </div>
                
                </div>
                <div id="plastic" class="col s12">
                	<div class="container">
                    <form method="post" enctype="multipart/form-data">
                    	<div class="row">
                            <div class="input-field col s12 ">
                              
                              <input id="name" type="text" name="name_plastic" class="validate" required>
                              <label for="username">Name</label>
                            </div>
                            
                        </div>
                        
                    	<div class="file-field input-field">
                          <div class="btn">
                            <span>Image</span>
                            <input type="file" name="image_plastic" required>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                        </div>
                        
                        <div class="row">
                          <button class="btn waves-effect waves-light btn-flat" type="submit" name="submit_plastic">Submit Plastic
                            <i class="material-icons right">keyboard_arrow_right</i>
                          </button>
                        </div>
                        <div id="feedback">
                        	<?php if(isset($feedback)) echo $feedback;?>
                        </div>
                    </form>
                    </div>
                
                
                </div>
                <div id="gadget" class="col s12">
                	<div class="container">
                    <form method="post" enctype="multipart/form-data">
                    	<div class="row">
                            <div class="input-field col s12 ">
                              
                              <input id="name" type="text" name="name_gadget" class="validate" required>
                              <label for="username">Name</label>
                            </div>
                            
                        </div>
                        
                    	<div class="file-field input-field">
                          <div class="btn">
                            <span>Image</span>
                            <input type="file" name="image_gadget" required>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                        </div>
                        <div class="row">
                        	<textarea class="content" name="desc_gadget" required></textarea>
                        </div>
                        
                        <div class="row">
                          <button class="btn waves-effect waves-light btn-flat" type="submit" name="submit_gadget">Submit Gadget
                            <i class="material-icons right">keyboard_arrow_right</i>
                          </button>
                        </div>
                        <div id="feedback">
                        	<?php if(isset($feedback)) echo $feedback;?>
                        </div>
                    </form>
                    </div>
                
                
                </div>
            </div>
                
                
        </div>
    </section>
    
    
    
    
    
    

    
    

	<!--Js include-->
	<?php include('toscherry_js_lib.php'); ?>
	<script type="text/javascript" src="js/jquery.richtext.min.js"></script>
    <script src="js/upload_script.js"></script>
    
</body>
</html>

