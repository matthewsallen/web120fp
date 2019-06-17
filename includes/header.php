<!DOCTYPE html>
<html lang="en">
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
<title>
    <?php 
        if(isset($title) && !empty($title)) { 
            echo $title; 
        } 
        else { 
            echo "Default title tag"; 
        } ?>
</title>
    

</head>
  

<body>

    <div class="hero-image">
        <div class="hero-text">
            <div class="opacity">
                <h1>&nbsp;<br>&nbsp;<b>The</b>&nbsp;<br>
                &nbsp;Masonry&nbsp;<br>&nbsp;</h1> 
            </div>     
        </div>
    </div>
   



    
    
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Font Awesome CSS References -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/v4-shims.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
 

    
    <!-- My CSS References -->
    
    <link rel="stylesheet" href="css/nav.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href=css/google.css>



<!-- NAV BAR -->
<div class="topnav" id="myTopnav">
    <a href="index.php"><span> Home</span></a>
    <a href="menus.php"><span> Menus</span></a>
    <a href="galleries.php"><span> Galleries</span></a>
    <a href="contact.php"><span> Contact</span></a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<!-- END NAV BAR -->

    
<!-- NAV JS -->
    
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


