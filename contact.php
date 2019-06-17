<?php 

$page = "contact";

$title = "The Masonry - Contact Us";

$metaD = "contact";

include 'includes/header.php';

?>




<section>
    <div class="wrapper">
    <h2>Contact Us</h2>
    <?php include 'includes/simple.php';?>   
    </div>
</section>
        
<!-- END CONTACT FORM -->

    
    
    
    
<!-- START RIGHT COL -->
<aside>
<div class="row1">
  <div class="column1" style="background-color: white; padding: 20px;">
   <br><b>Queen Anne:</b><br>
        <a href="https://goo.gl/maps/3taLm5bFCEuxekBB6" target="_blank">
        20 Roy Street<br>
        Seattle, WA 98109<br></a><br>
        <b>T:</b>
        <a href="tel:123-456-7890">(206)456-7890</a><br><br>
        <b>Hours</b><br>
        Lunch 11:30am - 2:00pm<br>
        Happy Hour 2:00pm - 5:00pm<br>
        Dinner 5:00pm - 11:00pm
  </div>
  <div class="column1" style="background-color:white; padding: 20px">
     <br><b>Fremont:</b><br>
        <a href="https://goo.gl/maps/L3TNuuaXvXUPfaTU9" target="_blank">
        730 North 34th Street<br>
        Seattle, WA 98103<br></a><br>
        <b>T:</b>
        <a href="tel:123-456-7890">(206)789-7890</a><br><br>
        <b>Hours</b><br>
        Lunch 11:30am - 2:00pm<br>
        Happy Hour 2:00pm - 5:00pm<br>
        Dinner 5:00pm - 11:00pm

  </div>
</div>
</aside>
<!-- END RIGHT COL -->

    
    
    
<!-- RECAPTCHA JS -->

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<div><?=$feedback?></div>        

<?php include 'includes/footer.php';?>