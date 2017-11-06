<?php 
	//active class assignment
	$home_active = "";
	$about_active = "";
	$team_active = "";
	$products_active = "menu-active";
	$contact_active = "";
	
	//title page assignment
	$page_title = "Computers";
	
	
	include('connect_toscherry.php');
	
	//obtain the required pageno
	if(isset($_GET["pageno"]))
	{
	   $page_no = $_GET["pageno"];
		}else{
	   $page_no=1;
	}
	
	//Identify how many database rows are available
	$page_query = "select count(*) from computers order by id desc ";
	$page_result = mysqli_query($connect, $page_query) or die("Could Not Select".mysqli_error($connect));
	$data_query = mysqli_fetch_row($page_result);
	//print_r( $data_query);
	$num_of_rows = $data_query[0];
	
	
	//calculate the number of pages needed
	$rows_per_page = 9;
	$num_of_pages = ceil($num_of_rows/$rows_per_page);
	//ensure that page no is within the page
	   $page_no = (int)$page_no;
	if($page_no > $num_of_pages)
	  {
	   $page_no = $num_of_pages;
	  }
	if($page_no < 1)
	  {
	   $page_no = 1;
	  }
	//construct the limit clause
	$limit = 'limit '.($page_no-1) * $rows_per_page .','. $rows_per_page;
	//issue the database query
	$select = mysqli_query($connect, "SELECT * FROM computers order by id desc $limit");
	
	if(mysqli_num_rows($select)){
		while($row = mysqli_fetch_assoc($select)){
			$id[] = $row['id'];
			$name[] = $row['name'];
			$image[] = $row['image'];
			$desc[] = $row['description'];
		}
	}
	else{echo "Could not fetch data from database".mysqli_error($connect);}
	
	
	
	
	
	
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
                    <h3 class="section_title">Our Computers</h3>
                    <div class="section_title_divider"></div>
                    <p class="section_desc">Below are the latest trending laptops<br>
                    You can make the order by sending us a message below specifying the product name</p>
                </div>
            </div>
        </div>
        <div class="container">
        
        	<div class="row">
            
            <?php for($x = 0; $x <count($name); $x++){
				$delay = "0";
				if(($x+1) % 3 == 2){
					$delay = "400ms";
				}
				if(($x+1) % 3 == 0){
					$delay = "700ms";
				}
				?>
            	
            	<div class="latest_items_container col l4 m6 s12 wow fadeInUp" data-wow-delay="<?php echo $delay;?>">
                	<div class="latest_items  z-depth-1-half row">
                    	<div class="img_container col s6 m12"><img class="materialboxed img_container" data-caption="<?php echo $name[$x];?>" src="img/laptops/<?php echo $image[$x];?>" width="90%" height="100%"></div>
                        
                        <?php
                        	if (strlen($name[$x]) > 15) {
								echo "<h6> $name[$x]</h6>";
							}else{ echo "<h5> $name[$x]</h5>";}
							
						?>
                        <p class="latest_details col s6 m12">
                        	<?php //echo $desc[$x];
								// strip tags to avoid breaking any html strip_tags('string')
								$string = $desc[$x];
								
								if (strlen($string) > 120) {
								
									// truncate string
									$stringCut = substr($string, 0, 120);
								
									// make sure it ends in a word so assassinate doesn't become ass...
									$string = substr($stringCut, 0, strrpos($stringCut, ' '))."...<br> <a href='view_computer_detail.php?id=".$id[$x]."'>Read More</a>"; 
								}
								echo $string;
							?>
                        	
                            
                                <!--Display: 
                                Processor: 
                                Camera: 
                                Battery: 
                                RAM: 
                                OS: 
                                Audio input: --> 
                        </p>
                        
                    </div>
                </div>
                
                
            <?php /*this adds another div at the end of the row*/
			if(($x+1) % 3 == 0) echo "</div> <div class='row'>";?>
            <?php /*this ends the forloop*/}?>
        
        
        	
        </div>
        
        <div class="page_nav">

			<?php
            //create links for the pages
            if($page_no==0){
            echo "First | Prev";
            }else{
            echo "<a href='computers.php?pageno=1'>First</a> | ";
            $prev_page = $page_no-1;
            echo " <a href='computers.php?pageno=$prev_page'>Prev</a>";
            }
            echo " ($page_no of $num_of_pages) ";
            if($page_no==$num_of_pages){
            echo "Next | Last";
            }else{
            $next_page = $page_no+1;
            echo "<a href='computers.php?pageno=$next_page'>Next</a> | ";
            echo "<a href='computers.php?pageno=$num_of_pages'>Last</a>";
            }
            ?>
        </div>
    </section>
    
	<!--footer include-->
	<?php include('toscherry_footer.php'); ?>
	<!--Js include-->
	<?php include('toscherry_js_lib.php'); ?>
</body>
</html>