<!DOCTYPE html>
<html>
    <head>
        <title>SOFAScore</title>
        <link rel="stylesheet" href = "style.css">
    </head>
    <body>
        <label class = "title">Subscores</label>
        <div class = 'div-container'>
          <?php
              // receive posted patient details from index.php 
              $nhi = $_POST["nhi"];
              $fname = $_POST["fname"];
              $sname = $_POST["sname"];
              // update patient details, set them as cookies
              setcookie("patient-nhi",$nhi);
              setcookie("patient-surname",$sname);
              setcookie("patient-firstname",$fname);

              // display user info from cookies
              echo "<label class = 'labelpagetwothreemain' style = 'display:inline;'>First name: </label><p style = 'display:inline;margin-right:5rem;'>" . $fname . "</p>";
              echo "<label class = 'labelpagetwothreemain' style = 'display:inline;'>Surname: </label><p style = 'display:inline;margin-right:5rem;'>" . $sname . "</p>";
              echo "<label class = 'labelpagetwothreemain' style = 'display:inline;'>NHI: </label><p style = 'display:inline;margin-right:5rem;'>" . $nhi . "</p><br><br><br>";
          ?>
        
           <form method="POST" name="form1"  action="result.php">
              <!-- centralnervoussystem input -->
              <label for="centralNervousSystem" class = "labelpagetwothreemain">Central nervous system: Glasgow coma scale</label>
              <div id ="centralNervousSystem-container">
                <select name="centralNervousSystem" id="centralNervousSystem">
                  <option value="0">15</option>
                  <option value="1">13-14</option>
                  <option value="2">10-12</option>
                  <option value="3">6-9</option>
                  <option value="4">&lt;6</option>
                </select>
              </div><br>
            
              <!-- cardiovascular input -->
              <div class = "cardiovascular-container">
                <label class = "labelpagetwothreemain">Cardiovascular system: Mean arterial pressure OR administration of vasopressors required</label>
                <label>Please enter an input for atleast one option:</label>

                <!-- radio buttons to choose mean arterial pressure OR administration of vasopressors required -->
                <label class="rb-container">MAP
                  <input type = "radio" class ="radio" id ="mapRadio" value="0" name = "cardiovascularRadio" onclick= "checkCardiovascular()">
                </label>                

                <label class="rb-container">Dopamine
                  <input type = "radio" class ="radio" id ="dopamineRadio" value="1" name = "cardiovascularRadio" onclick= "checkCardiovascular()">
                </label>   

                <label class="rb-container">Dobutamine
                  <input type = "radio" class ="radio" id ="dobutamineRadio" value="2" name = "cardiovascularRadio" onclick= "checkCardiovascular()">
                </label>                
                
                <label class="rb-container">Epinephrine
                  <input type = "radio" class ="radio" id ="epinephrineRadio" value="3" name = "cardiovascularRadio" onclick= "checkCardiovascular()">
                </label>   

                <label class="rb-container">Norepinephrine
                  <input type = "radio" class ="radio" id ="norepinephrineRadio" value="4" name = "cardiovascularRadio" onclick= "checkCardiovascular()">
                </label>                

                <!-- dropdown boxes to choose mean arterial pressure OR administration of vasopressors required -->
                <label class = "labelpagetwothreemain">Select Option:</label>
                <div id ="map-container" style ="display:none;">
                  <select name= "map" id="map">
                    <option value="0">MAP ≥ 70 mmHg</option>
                    <option value="1">MAP < 70 mmHg</option>
                  </select>
                </div>

                <div id ="dopamine-container" style ="display:none;">
                  <select name="dopamine" id="dopamine">
                    <option value="2">dopamine ≤ 5 μg/kg/min</option>
                    <option value="3">dopamine > 5 μg/kg/min</option>
                    <option value="4">dopamine > 15 μg/kg/min</option>
                  </select>
                </div>

                <div id ="dobutamine-container" style ="display:none;">
                <select name="dobutamine" id="dobutamine">
                    <option value="2">Any dose of dobutamine</option>
                  </select>
                </div>

                <div id ="epinephrine-container" style ="display:none;">
                  <select name="epinephrine" id="epinephrine">
                    <option value="3">epinephrine ≤ 0.1 μg/kg/min</option>
                    <option value="4">epinephrine > 0.1 μg/kg/min</option>
                  </select>
                </div>                    

                <div id ="norepinephrine-container" style ="display:none;">
                  <select name="norepinephrine" id="norepinephrine">
                    <option value="3">norepinephrine ≤ 0.1 μg/kg/min</option>
                    <option value="4">norepinephrine > 0.1 μg/kg/min</option>
                  </select>
                </div>
              </div><br>

              <!-- respiratorysystem input -->  
              <div class = "select-container">
                <label for="respiratorySystem" class = "labelpagetwothreemain">Respiratory system: PaO2/FiO2 [mmHg (kPa)]</label>
                <select name="respiratorySystem" id="respiratorySystem">
                  <option value="0">≥ 400 (53.3)</option>
                  <option value="1">< 400 (53.3)</option>
                  <option value="2">< 300 (40)</option>
                  <option value="3">< 200 (26.7)</option>
                  <option value="4">< 100 (13.3)</option>
                </select>
              </div>
            
              <!-- cpap input -->  
              <label class = "labelpagetwothreemain">(Mechanically ventilated including CPAP): </label>
              <label class="rb-container">Yes
                <input type = "radio"  class ="radio"  id ="cpapTrue" value="Yes" name = "cpap">
                <span class="checkmark"></span>
              </label>    

              <label class="rb-container">No
                <input type = "radio" class ="radio"   id ="cpapFalse" value="No" name = "cpap">
                <span class="checkmark"></span>
              </label><br>

              <!-- respiratorysystem input -->  
              <div class = "select-container">
                <label for="coagulation" class = "labelpagetwothreemain">Coagulation: Platelets (×103/μl)</label>
                <select name="coagulation" id="coagulation">
                    <option value="0">≥ 150</option>
                    <option value="1">< 150</option>
                    <option value="2">< 100</option>
                    <option value="3">< 50</option>
                    <option value="4">< 20</option>
                </select>
              </div><br>
              
              <!-- liver input -->  
              <div class = "select-container">
                <label for="liver" class = "labelpagetwothreemain">Liver: Bilirubin (mg/dl)</label>
                <select name="liver" id="liver">
                  <option value="0">< 1.2 [< 20]</option>
                  <option value="1">1.2–1.9 [20-32]</option>
                  <option value="2">2.0–5.9 [33-101]</option>
                  <option value="3">6.0–11.9 [102-204]</option>
                  <option value="4">>12.0 [> 204]</option>
                </select>
              </div><br>

              <!-- renal input -->  
              <div class = "select-container">
                <label for="renalFunction" class = "labelpagetwothreemain">Renal Function: Creatinine (mg/dl) [μmol/L] (or urine output)</label>
                <select name="renalFunction" id="renalFunction">
                  <option value="0">< 1.2 [< 110]</option>
                  <option value="1">1.2–1.9 [110-170] </option>
                  <option value="2">2.0–3.4 [171-299] </option>
                  <option value="3">3.5–4.9 [300-440] (or < 500 ml/day)</option>
                  <option value="4">> 5.0 [> 440] (or < 200 ml/day) </option>
                </select>
              </div>

              <!-- make sure the user entered all inputs and get the value of cardiovascular dropdown box -->
              <input type='submit' value='Submit' onclick = "getCardiovascular();return checkCardiovascularResult();"> 
          </form> 
        </div>

        <script src = "script.js"></script>
    </body>
</html>