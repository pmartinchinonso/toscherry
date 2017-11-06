<?php
	//active class assignment
	$home_active = "";
	$about_active = "";
	$team_active = "";
	$products_active = "";
	$contact_active = "";
	
	//title page assignment
	$page_title = "Admin login";
	
	
	include("../connect_toscherry.php");
	
	if(isset($_POST["submit"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$select = mysqli_query($connect, "SELECT * FROM admin_login where username='$username' and password='$password'");
		
		$num = mysqli_num_rows($select);
		if(mysqli_num_rows($select)){
			while($row = mysqli_fetch_assoc($select)){
				$user = $row["username"];
				$pass = $row["password"];
			}
			
			setcookie("cookie", $user, time()+3600);
			header("location: admin_input_form.php");
		}
		else{echo mysqli_error($connect);
			$login_error = "Couldn't log in, enter the username and password correctly.";
		}
		
		
		
		/*$insert = mysqli_query($connect, "insert into login_table values('', '$username', '$password')");
		if($insert){ echo "successful.<br>";} else{ echo "fuck up".mysqli_error();}*/
		 		
	}

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
                    <h3 class="section_title">Login</h3>
                    <div class="section_title_divider"></div>
                </div>
            </div>
        </div>
        <div class="container">
        	<form method="post" enctype="multipart/form-data">
            	<div class="login_container">
                	<div class="row">
                    	<div class="input-field col s12 offset-m3 m6">
                          <i class="material-icons prefix">person</i>
                          <input id="username" type="text" name="username" class="validate" required>
                          <label for="username">Username</label>
                        </div>
                     	
                  	</div>
                  	<div class="row">
                    	<div class="input-field col s12 offset-m3 m6">
                          <i class="material-icons prefix">exit_to_app</i>
                          <input id="password" type="password" name="password" class="validate" required>
                          <label for="password" data-error="wrong" data-success="right">Password</label>
                    	</div>
                  	</div>
                    <div class="row">
                      <button class="btn waves-effect waves-light btn-flat col offset-m3" type="submit" name="submit">Login
                        <i class="material-icons right">keyboard_arrow_right</i>
                      </button>
                  	</div>
                    <div class="row">
                      <div class="col offset-m3 red-text" >
                      	<?php if(isset($login_error)) echo $login_error;?>
                      </div>
                  	</div>
                </div>
            </form>
    	</div>
    </section>
    
    	<!--Js include-->
	<?php include('toscherry_js_lib.php'); ?>

</body>
</html>