<?php
  include '../sito/struttura.php';
  include '../sito/navbar.php';
  echo $settings;
?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Hello World</h1> 
          <h2>Impostazioni sito <i class="fas fa-cog fa-spin"></i></h2> 
        </div>
      </div>
      
      <div class="row">
        <div class="col-12">
          <div align="center">  
            <br>
            <input type="checkbox" id="darkSwitch">
            <label for="darkSwitch">Night</label> 
            <h4>Attiva la Dark Mode<h4> 
            <font color="#ffffff"><h1> WOW LA MODALITÀ NOTTEO </h1></font>
          </div>
        </div>
      </div>
    </div>

<?php
  echo $footer;
  echo $js2;
?>  
