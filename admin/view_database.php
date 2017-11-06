<?php
	//active class assignment
	$home_active = "";
	$about_active = "";
	$team_active = "menu-active";
	$products_active = "";
	$contact_active = "";
	
	//title page assignment
	$page_title = "Upload goods";
	
	include("../connect_toscherry.php");
	
	if(isset($_COOKIE["cookie"]))$admin_id = $_COOKIE["cookie"]; else header("location:  index.php");
	
	/*Computer query*/
	if(isset($_GET['iddel'])){
		$del =  $_GET['iddel'];
		$comp_delete = mysqli_query($connect, "DELETE FROM computers where id='$del'");	
		$act_comp = 'active';
		$act_print = '';
		$act_plast = '';
		$act_gadg = '';
	}
	
	$comp_select = mysqli_query($connect, "SELECT * FROM computers order by id desc");
	
	if(mysqli_num_rows($comp_select)){
		while($row = mysqli_fetch_assoc($comp_select)){
			$comp_id[] = $row['id'];
			$comp_name[] = $row['name'];
		}
	}
	else{echo "Could not fetch data from database".mysqli_error($connect);}
	
	/*Printers query*/
	if(isset($_GET['printdel'])){
		$printdel =  $_GET['printdel'];
		$print_delete = mysqli_query($connect, "DELETE FROM printers where id='$printdel'");
		$act_comp = '';
		$act_print = 'active';
		$act_plast = '';
		$act_gadg = '';
	}
	
	$print_select = mysqli_query($connect, "SELECT * FROM printers order by id desc");
	
	if(mysqli_num_rows($print_select)){
		while($row = mysqli_fetch_assoc($print_select)){
			$print_id[] = $row['id'];
			$print_name[] = $row['name'];
		}
	}
	else{echo "Could not fetch data from database".mysqli_error($connect);}
	
	/*Plastics query*/
	if(isset($_GET['plastdel'])){
		$plastdel =  $_GET['plastdel'];
		$plast_delete = mysqli_query($connect, "DELETE FROM plastics where id='$plastdel'");
		$act_comp = '';
		$act_print = '';
		$act_plast = 'active';
		$act_gadg = '';	
	}
	
	$plast_select = mysqli_query($connect, "SELECT * FROM plastics order by id desc");
	
	if(mysqli_num_rows($plast_select)){
		while($row = mysqli_fetch_assoc($plast_select)){
			$plast_id[] = $row['id'];
			$plast_name[] = $row['name'];
		}
	}
	else{ echo "Could not fetch data from database".mysqli_error($connect);}
	
	/*Gadgets query*/
	if(isset($_GET['gadgedel'])){
		$gadgedel =  $_GET['gadgedel'];
		$gadge_delete = mysqli_query($connect, "DELETE FROM gadgets where id='$gadgedel'");
		$act_comp = '';
		$act_print = '';
		$act_plast = '';
		$act_gadg = 'active';
	}
	
	$gadge_select = mysqli_query($connect, "SELECT * FROM gadgets order by id desc");
	
	if(mysqli_num_rows($gadge_select)){
		while($row = mysqli_fetch_assoc($gadge_select)){
			$gadge_id[] = $row['id'];
			$gadge_name[] = $row['name'];
		}
	}
	else{ echo "Could not fetch data from database".mysqli_error($connect);}
	
	
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
                    <h3 class="section_title">View Database</h3>
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
                    	<table class="wow zoomIn striped" width="800" align="center" border="1">
                            <thead><tr>
                                <th>ID</th>
                                <th>Computer Name</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr></thead>
                            <tbody>
                            <?php for($x = 0; $x<count($comp_id); $x++){ ?>
                            <tr>
                                <td><?php echo $comp_id[$x] ?></td>
                                <td><?php echo $comp_name[$x] ?></td>
                                <td><a href="update_data.php?id=<?php echo $comp_id[$x] ?>">Edit</a></td>
                                <td><a href="view_database.php?iddel=<?php echo $comp_id[$x] ?>">Delete</a></td>
                                <td><a href="../view_computer_detail.php?id=<?php echo $comp_id[$x] ?>">View</a></td>
                            </tr>
                            <?php }?>
                            
                            </tbody>
                        </table>
                        
                    </div>
                </div>
                <div id="print" class="col s12">
                	<div class="container">
                    	<table class="wow zoomIn striped" width="800" align="center" border="1">
                            <thead><tr>
                                <th>ID</th>
                                <th>Printer Name</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                
                            </tr></thead>
                            <tbody>
                            <?php for($x = 0; $x<count($print_id); $x++){ ?>
                            <tr>
                                <td><?php echo $print_id[$x] ?></td>
                                <td><?php echo $print_name[$x] ?></td>
                                <td><a href="update_data.php?id=<?php echo $print_id[$x] ?>">Edit</a></td>
                                <td><a href="view_database.php?printdel=<?php echo $print_id[$x] ?>">Delete</a></td>
                                
                            </tr>
                            <?php }?>
                            
                            </tbody>
                        </table>
                    </div>
                
                </div>
                <div id="plastic" class="col s12">
                	<div class="container">
                    	<table class="wow zoomIn striped" width="800" align="center" border="1">
                            <thead><tr>
                                <th>ID</th>
                                <th>Plastic Name</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                
                            </tr></thead>
                            <tbody>
                            <?php for($x = 0; $x<count($plast_id); $x++){ ?>
                            <tr>
                                <td><?php echo $plast_id[$x] ?></td>
                                <td><?php echo $plast_name[$x] ?></td>
                                <td><a href="update_data.php?id=<?php echo $plast_id[$x] ?>">Edit</a></td>
                                <td><a href="view_database.php?plastdel=<?php echo $plast_id[$x] ?>">Delete</a></td>
                                
                            </tr>
                            <?php }?>
                            
                            </tbody>
                        </table>
                    </div>
                
                
                </div>
                <div id="gadget" class="col s12">
                	<div class="container">
                    	<table class="wow zoomIn striped" width="800" align="center" border="1">
                            <thead><tr>
                                <th>ID</th>
                                <th>Gadget Name</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                
                            </tr></thead>
                            <tbody>
                            <?php for($x = 0; $x<count($gadge_id); $x++){ ?>
                            <tr>
                                <td><?php echo $gadge_id[$x] ?></td>
                                <td><?php echo $gadge_name[$x] ?></td>
                                <td><a href="update_data.php?id=<?php echo $gadge_id[$x] ?>">Edit</a></td>
                                <td><a href="view_database.php?gadgedel=<?php echo $gadge_id[$x] ?>">Delete</a></td>
                                
                            </tr>
                            <?php }?>
                            
                            </tbody>
                        </table>
                    </div>
                
                
                </div>
            </div>
            <div class="wow slideInLeft">
                <a href="admin_input_form.php">Upload more goods</a>
            </div>    
                
        </div>
    </section>
    
    
    
    
    
    

    
    

	<!--Js include-->
	<?php include('toscherry_js_lib.php'); ?>
    
</body>
</html>

