<?php
    include "config.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    include "head.php"; 
    ?>
</head>
<body>

<div id="container">
	<?php
    include "include/menu.php";
    ?>
    
    <div id="header">
        
    </div> <!-- end of header -->
    
    <div id="content">
    	
        <div id="content_left">
        	<div class="content_left_section">
            	<?php
                include"include/category.php";
                ?>
            </div>
			<div class="content_left_section">
            	<?php
                include "include/bestsell.php";
                ?>
            </div>
            
            <div class="content_left_section">                
                <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
			</div>
        </div> <!-- end of content left -->
        
        <div id="content_right">
        	<?php
            include "include/random.php";
            ?>

        </div>
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="footer">
    
	       <a href="index.php">Home</a> | <a href="index.php">Search</a> | <a href="index.php">Phone</a> | <a href="#">Hot line</a> | <a href="#">FAQs</a> | <a href="#"> More infomation </a><br />
        Copyright © 2024 <a href="#"><strong>Chi Pheo Shop</strong></a> | Designed by <a href="http://www.chipheoshop.ga" target="_parent" title="free css templates">Free CSS Templates</a>	</div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
</body>
</html>