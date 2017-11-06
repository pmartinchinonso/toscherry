<?php
	//active class assignment
	$home_active = "";
	$about_active = "";
	$team_active = "";
	$products_active = "menu-active";
	$contact_active = "";
	
	//title page assignment
	$page_title = "Update";
	
	include("../connect_toscherry.php");
	
	if(isset($_COOKIE["cookie"]))$admin_id = $_COOKIE["cookie"]; else header("location:  index.php");
	
	$a = $_GET['id'];
	$query = mysqli_query($connect,  "SELECT * FROM computers where id = '$a'");
	if(mysqli_num_rows($query)){
		while($row = mysqli_fetch_assoc($query)){
			$name = $row['name'];
			$desc = $row['description'];
		}
	}
	else{ echo "Could not fetch data from database".mysqli_error($connect);}
	
	if(isset($_POST['submit'])){
		$name = $_POST['name_computer'];
		$desc = $_POST['desc_computer'];
		
		$update_query = "UPDATE computers SET 
		name = '$name', 
		description = '$desc'
		WHERE id= '$a';";
		$update = mysqli_query($connect, $update_query);
		if($update){ 
			$feedback = "Computer added succesfully";
			header("location: view_database.php");
		}else{ $feedback = "Couldn\'t upload".mysqli_error();}
		
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
                    <form method="post" enctype="multipart/form-data">
                    	<div class="row">
                            <div class="input-field col s12 ">
                              
                              <input id="name" type="text" name="name_computer" value="<?php echo $name?>" class="validate" required>
                              <label for="username">Name</label>
                            </div>
                            
                        </div>
                        
                    	
                        <div class="row">
                        	<textarea class="content" name="desc_computer" placeholder="Description" required><?php echo $desc?>"</textarea>
                        </div>
                        <div class="row">
                          <button class="btn waves-effect waves-light btn-flat" id="computer_btn" type="submit" name="submit">Update Computer Details
                            <i class="material-icons right">keyboard_arrow_right</i>
                          </button>
                          
                          <a href="update_computer_image.php?id=<?php echo $a?>"><button class="btn waves-effect waves-light" type="button">Change Image
                            <i class="material-icons right">keyboard_arrow_right</i>
                          </button></a>
                        </div>
                        <div id="feedback">
                        	<?php if(isset($feedback)) echo $feedback;?>
                        </div>
                    </form>
                    </div> 
        </div>
    </section>
    
    
    
    
    
    

    
    

	<!--Js include-->
	<?php include('toscherry_js_lib.php'); ?>
	<script type="text/javascript" src="js/jquery.richtext.min.js"></script>
    <script type="text/javascript">
    	$('.content').richText();
    </script>
    
</body>
</html>

