<!doctype html>
<html>
<head>

<?php include('includes/header.php'); ?>
  

<title>Contact Us</title>
</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/go-to-top.png" class="img-responsive" /></button>
<!--Main container start-->
<div id="main-container" class="container-fluid">

	<!--Navigation start-->
    <header>
    <?php include('includes/navigation.php'); ?>
    </header>
    <!--Navigation end-->
    
    <!--Main Content start-->
    <div class="main-content container-fluid">

    	 <section class="contact-us">
        
        	<div class="left-column">

            </div>
            
        	<div class="right-column">
            
            	<h1>We're here to help.</h1>
                <p>To Get In Touch, Please Fill Out The Form Below</p>
            
                <form>
                <div class="controls-row">
                    <input id="name" name="name" type="text" class="" placeholder="Name" required> 
                    <input id="phone" name="phone" type="number" class="" placeholder="Phone"> 
                    
                </div>
                <div class="controls">
                	<input id="email" name="email" type="email" class="" placeholder="Email address" required>
                    
                </div>
                  
                <div class="controls">
                	<textarea id="message" name="message" class="span6" placeholder="Your Message" rows="5"></textarea>
                    
                    
                    
                    <button id="contact-submit" type="submit" class="contact-submit">Submit</button>
                </div>
            	</form>
                    
            </div> 
        
        </section>  
    

    </div>
    <!--Main Content end-->
    
    <!--Footer start-->
    <?php include('includes/footer.php'); ?> 
    <!--Footer End-->

</div>
<!--Main container end-->
<?php include('includes/scripts.php'); ?> 
<!--Scripts Section-->

</body>
</html>