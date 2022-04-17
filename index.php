
<head>
<?php

require_once "convertion.php";

?>

<link rel="stylesheet" href="layout.css">
<section id="contact">
  <div class="contact-box">
    <div class="contact-links">
      <h2>Converters of pressure units</h2>
      <div class="links">
        <div class="link">
          <a><img src="https://www.festo.com/rep/pl_pl/op/coreprog/media/new-vuvg%402x.png"></a>
        </div>
      </div>
    </div>
    <div class="contact-form-wrapper">

  
       <form action=" " method="post">
       <div class="form-item">
          <input type="number" name="pressure" id="pressure" required>
          <label>Pressure:</label>
        </div>

        <div class="form-item">
               <label for="selectedUnit">Select unit you have</label><br/>
               <select name="selectedUnit" id="selectedUnit">
                   <option value="Bar">Bar</option>
                   <option value="Pascal">Pascal</option>
               </select>
        </div>
        <div class="form-item">
               <label for="convertedUnit ">Select unit you want to convert</label><br/>
               <select name="convertedUnit" id="convertedUnit">
                   <option value="Bar">Bar</option>
                   <option value="Pascal">Pascal</option>
               </select>
       </div>
       <button class="submit-btn" value="Convert">Convert</button> 
        <div class="form-item">
        
</br>
<textarea>
     <?php
     
     require_once "result.php"; ?>
    
</textarea>
    
    <label>Result:</label>
           </div>
       </form>

       
</head>


