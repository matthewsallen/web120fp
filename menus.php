<?php 

$page = "menus";

$title = "The Masonry - Menus";

$metaD = "menus";

include 'includes/header.php';

?>



<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script src="dom.js"></script> 
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/subnav.js"></script>

<section>
    
<div class="wrapper">
    
    <h2>Menus</h2>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Food</a></li>
    <li><a href="#tabs-2">Drink</a></li>
    <li><a href="#tabs-3">Happy Hour</a></li>
  </ul>
<!-- TAB 1-->
  <div id="tabs-1">
      <div class="row1">
        <div class="column1" style="background-color: white;">
            <h3>WOOD FIRED PIZZA</h3>
            <h4>CLASSICS</h4>
            <ul style="list-style: none;">
                    <li><b>Margherita</b><br><small>mozzarella, basil, garlic, tomato sauce 14</small>
                    </li>
                    <li><b>Marinara</b><br><small>a classic vegan pizza; garlic, oregano, tomato sauce, spicy chili oil 12.5</small>
                    </li>
                    <li><b>Mushroom</b><br><small>crimini, taleggio, garlic & olive oil, thyme 15</small>
                    </li>
                    <li><b>Sausage</b><br><small>house Italian sausage, fontina, shallot, garlic, tomato sauce 16</small>
                    </li>
             </ul>
             <h4>SEASONAL</h4>
             <ul style="list-style: none;">
                    <li><b>Al Diavolo</b><br><small>mozzarella, soppressata, chilis, hot honey, tomato sauce 18.5</small>
                    </li>
                    <li><b>Cherry Chutney</b>,<br><small>house sausage, garlic, cherry chutney, smoked gouda 19.5</small></li>
                 <li><b>Pomodoro</b><br><small>slow-roasted tomato, garlic & olive oil, chèvre, basil 17.5 </small></li>
             </ul>
        </div>
        <div class="column1" style="background-color:white;">
            <h4>SMALL PLATES</h4>
                <ul style="list-style: none;">
                    <li><b>Meatballs</b><br><small> so tender… a little spicy 10</small></li>
                    <li><b>Roasted Asparagus</b><br><small>garlic, toasted pinenuts, parmesan 8.5</small>
                    </li>
                    <li><b>Clams & Chorizo</b><br><small>iberico chorizo, tomato, fennel, calabrian chili, focaccia 13.5</small></li>
                    <li><b>Honey Roasted Rainbow Carrots</b><br><small>tahini yogurt, hazelnut, hot chili oil 8.5 </small>
                    </li>
                    <li><b>Pickled Vegetables</b><br><small>3.5</small></li>
                    <li><b>House-Made Foccacia</b><br><small>2 oil & balsamic vinegar 1 </small></li>
                </ul>
                <h4>SALADS</h4>
                <ul style="list-style: none;">
                    <li><b>Caesar</b><br><small>romaine, shaved parmesan, focaccia crouton 9 </small>
                    </li>
                    <li><b>Stawberry & Feta</b><br><small>mixed greens, pecan, strawberry champagne vinaigrette 9.5</small>
                    </li>
                    <li><b>Heirloom Tomato</b><br><small>microgreens, burrata, heirloom vinaigrette, pepitas, balsamic 9.5</small>
                    </li>
                </ul>
          </div>
        </div>
    </div>


                
<!-- TAB 2 -->
  <div id="tabs-2">
      <div class="row1">
        <div class="column1" style="background-color: white;">
            <h3>Beer</h3>
            <ul style="list-style: none;">
            <li><b>BAVIK SUPER PILS PILSNER .5l</b><br><small>5.2% crisp & clean pils; hay, grass, biscuits, & barley 7</small></li>

            <li><b>BRAUBÄCKER BERLINER WEISSE BERLINER WEISSE 12oz</b><br><small>2.5% a complex, funky and hugely drinkable fruity quencher 8</small></li>

            <li><b>CLOUDBURST REFRACTED LIGHT IPA .5l</b><br><small>7% Citra, Galaxy, Simcoe, & Ella hops w/ touch of malted wheat 7</small></li>
                
            <li><b>BAVIK SUPER PILS PILSNER .5l</b><br><small>5.2% crisp & clean pils; hay, grass, biscuits, & barley 7</small></li>

            <li><b>BRAUBÄCKER BERLINER WEISSE BERLINER WEISSE 12oz</b><br><small>2.5% a complex, funky and hugely drinkable fruity quencher 8</small></li>

            <li><b>CLOUDBURST REFRACTED LIGHT IPA .5l</b><br><small>7% Citra, Galaxy, Simcoe, & Ella hops w/ touch of malted wheat 7</small></li>
            </ul>
        </div>
        
        <div class="column1" style="background-color:white;">
            <h3>Red</h3>
            <ul style="list-style: none;">
            <li><b>BAVIK SUPER PILS PILSNER .5l</b><br><small>5.2% crisp & clean pils; hay, grass, biscuits, & barley 7</small></li>

            <li><b>BRAUBÄCKER BERLINER WEISSE BERLINER WEISSE 12oz</b><br><small>2.5% a complex, funky and hugely drinkable fruity quencher 8</small></li>

            <li><b>CLOUDBURST REFRACTED LIGHT IPA .5l</b><br><small>7% Citra, Galaxy, Simcoe, & Ella hops w/ touch of malted wheat 7</small></li>
            </ul>       
        </div>
        
        <div class="column1" style="background-color:white;">
            <h3>White</h3>
            <ul style="list-style: none;">
            <li><b>BAVIK SUPER PILS PILSNER .5l</b><br><small>5.2% crisp & clean pils; hay, grass, biscuits, & barley 7</small></li>

            <li><b>BRAUBÄCKER BERLINER WEISSE BERLINER WEISSE 12oz</b><br><small>2.5% a complex, funky and hugely drinkable fruity quencher 8</small></li>

            <li><b>CLOUDBURST REFRACTED LIGHT IPA .5l</b><br><small>7% Citra, Galaxy, Simcoe, & Ella hops w/ touch of malted wheat 7</small></li>
            </ul> 
        </div>
    </div>
</div>
  
<!-- TAB 3 -->
<div id="tabs-3">
      <div class="row1">
        <div class="column1" style="background-color: white;">
            <h3>Food</h3>
            <ul style="list-style: none;">
                    <li><b>Meatballs</b><br><small> so tender… a little spicy 10</small></li>
                    <li><b>Roasted Asparagus</b><br><small>garlic, toasted pinenuts, parmesan 8.5</small>
                    </li>
                    <li><b>Clams & Chorizo</b><br><small>iberico chorizo, tomato, fennel, calabrian chili, focaccia 13.5</small></li>
                    <li><b>Caesar</b><br><small>romaine, shaved parmesan, focaccia crouton 9 </small>
                    </li>
                    <li><b>Stawberry & Feta</b><br><small>mixed greens, pecan, strawberry champagne vinaigrette 9.5</small>
                    </li>
            </ul>
        </div>
        <div class="column1" style="background-color:white;">
            <h3>Beer</h3>
            <ul style="list-style: none;">
            <li><b>BAVIK SUPER PILS PILSNER .5l</b><br><small>5.2% crisp & clean pils; hay, grass, biscuits, & barley 7</small></li>

            <li><b>BRAUBÄCKER BERLINER WEISSE BERLINER WEISSE 12oz</b><br><small>2.5% a complex, funky and hugely drinkable fruity quencher 8</small></li>

            <li><b>CLOUDBURST REFRACTED LIGHT IPA .5l</b><br><small>7% Citra, Galaxy, Simcoe, & Ella hops w/ touch of malted wheat 7</small></li>
            </ul>   
        </div>
        <div class="column1" style="background-color:white;">
            <h3>Wine</h3>
            <ul style="list-style: none;">
            <li><b>BAVIK SUPER PILS PILSNER .5l</b><br><small>5.2% crisp & clean pils; hay, grass, biscuits, & barley 7</small></li>

            <li><b>BRAUBÄCKER BERLINER WEISSE BERLINER WEISSE 12oz</b><br><small>2.5% a complex, funky and hugely drinkable fruity quencher 8</small></li>

            <li><b>CLOUDBURST REFRACTED LIGHT IPA .5l</b><br><small>7% Citra, Galaxy, Simcoe, & Ella hops w/ touch of malted wheat 7</small></li>
            </ul>   
        </div>
    </div>
  </div>
</div>
</div>


    


    
</section>
    
<aside>
 <?php include 'includes/aside.php';?>
</aside>
    

<?php include 'includes/footer.php';?>