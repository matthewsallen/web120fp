<?php 

$page = "gallery";

$title = "The Masonry - Gallery";

$metaD = "gallery";

include 'includes/header.php';

?>

<!-- SLIDER CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<!-- SLIDER JS -->
  <script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
  </script>



<section>

<div class="wrapper">
<!-- GALLERY JQUERY PLUGIN -->
    
 
    


    <div class="slider">
    <div><img src="https://themasonryseattle.com/uploads/1/1/5/7/115751665/18722704-803908119776337-7492365380363485184-n_orig.jpg" alt="beer">
    </div>
    <div><img src="https://themasonryseattle.com/uploads/1/1/5/7/115751665/12940770-245639542447410-525745744-n_orig.jpg?resize=500%2C500" alt="salad">
    </div>
    <div><img src="https://themasonryseattle.com/uploads/1/1/5/7/115751665/12783853-697738403700958-652142095-n_orig.jpg" alt="wine">
    </div>
    <div><img src="https://themasonryseattle.com/uploads/1/1/5/7/115751665/12479290-1007454855987433-1834977528-n_orig.jpg" alt="dinner">
    </div> 
</div>
        
   
    
    
    
    
<!-- END GALLERY JQUERY PLUGIN -->   
</div>
</section>   
    
<aside>
 <?php include 'includes/aside.php';?>
</aside>
    

    
<?php include 'includes/footer.php';?>