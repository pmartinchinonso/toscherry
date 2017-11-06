<?php
	//active class assignment
	$home_active = "";
	$about_active = "";
	$team_active = "";
	$products_active = "menu-active";
	$contact_active = "";
	


	include('connect_toscherry.php');
	
	$id = $_GET['id'];
	$select = mysqli_query($connect, "SELECT * FROM computers where id='$id'");

		
	if(mysqli_num_rows($select)){
		while($row = mysqli_fetch_assoc($select)){
			$name = $row['name'];
			$image = $row['image'];
			$desc = $row['description'];
		}
	}
	else{echo "Could not fetch data from database".mysqli_error($connect);}
	
	//title page assignment
	$page_title = $name;	
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
    
	<section id="latest_computers">
    	<div class="container wow fadeInUp">
        	<div class="row">
                <div class="col s12">
                    <h3 class="section_title"><?php echo $name;?></h3>
                    <div class="section_title_divider"></div>
                </div>
            </div>
        </div>
        <div class="container">
        	<div class="row latest_items z-depth-1-half">
                <div class="col s12 m5">
                    <div class="">
                        <div class="img_containe"><img class="materialboxed img_container" data-caption="<?php echo $name;?>" src="img/laptops/<?php echo $image;?>" width="100%" height="100%"></div>
                    </div>    
                </div>
                <div class="col s12 m7">
                	<?php echo $desc;?>
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