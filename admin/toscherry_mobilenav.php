	<div class="open_button" onClick="side_open()">&#9776</div>
	<div class="side_nav">
        <button class="close_button" onClick="side_close()">&times;</button>
        <a href="index.php" class="<?php echo $home_active;?>">Home</a>
        <a href="#" class="<?php echo $about_active;?>">About Us</a>
        <a href="#" class="<?php echo $team_active;?>">Team</a>
        <div class="side_menu <?php echo $products_active;?>">
            <div id="side_item" class="<?php echo $products_active;?>">Products &#x25BE;</div>
            <div id="side_submenu">
                <a href="computers.php">Computers</a>
                <a href="#">Printers</a>
                <a href="#">Exotic Plastics</a>
                <a href="#">Security Gadgets</a>
            </div>
        </div>
        <a href="contact.php" class="<?php echo $contact_active;?>">Contact Us</a>
    </div>
    <div class="overlay" onClick="side_close()"></div>