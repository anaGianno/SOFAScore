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
              $nhi = $_POST["nhi"];
              $fname = $_POST["fname"];
              $sname = $_POST["sname"];
              setcookie("patient-nhi",$nhi);
              setcookie("patient-surname",$sname);
              setcookie("patient-firstname",$fname);

              echo "<label>First name </label><br><p>" . $fname . "</p><br>";
              echo "<label>Surname </label><br><p>" . $sname . "</p><br>";
              echo "<label>NHI </label><br><p>" . $nhi . "</p><br>";
          ?>
        


           <form method="POST" name="form1"  action="result.php">
              
                <label for="centralNervousSystem" class = "labelpagetwomain">Central nervous system: Glasgow coma scale</label><br>
                <div class="slidecontainer">
                    <div class ="slidenumbercontainer">
                      <p style = "display:inline">Value: </p>
                       <p id ="agenumber" style = "display:inline"></p>
                     </div>
                    <input type="range" min="0" max="15" value="0" class="slider" name="centralNervousSystem" id="centralNervousSystem">
                </div><br>
              

                 <div class = "cardiovascular-container">
                    <label class = "labelpagetwomain">Cardiovascular system: Mean arterial pressure OR administration of vasopressors required</label><br>
                    <label>Please enter an input for atleast one option:</label>

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

                    <label>Select Option:</label>
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

                <div class = "select-container">
                  <label for="respiratorySystem" class = "labelpagetwomain">Respiratory system: PaO2/FiO2 [mmHg (kPa)]</label>
                  <select name="respiratorySystem" id="respiratorySystem">
                    <option value="0">≥ 400 (53.3)</option>
                    <option value="1">< 400 (53.3)</option>
                    <option value="2">< 300 (40)</option>
                    <option value="3">< 200 (26.7) and mechanically ventilated including CPAP</option>
                    <option value="4">< 100 (13.3) and mechanically ventilated including CPAP</option>
                  </select>
                </div><br>
              
                <label class = "labelpagetwomain">Mechanically ventilated including CPAP: </label>
                <label class="rb-container">Yes
                  <input type = "radio"  class ="radio"  id ="cpapTrue" value="true" name = "cpap">
                  <span class="checkmark"></span>
                </label>    

                <label class="rb-container">No
                  <input type = "radio" class ="radio"   id ="cpapFalse" value="false" name = "cpap">
                  <span class="checkmark"></span>
                </label><br>

                  <div class = "select-container">
                      <label for="coagulation" class = "labelpagetwomain">Coagulation: Platelets (×103/μl)</label>
                      <select name="coagulation" id="coagulation">
                          <option value="0">≥ 150</option>
                          <option value="1">< 150</option>
                          <option value="2">< 100</option>
                          <option value="3">< 50</option>
                          <option value="4">< 20</option>
                      </select>
                  </div>
                  
                  <div class = "select-container">
                      <label for="liver" class = "labelpagetwomain">Liver: Bilirubin (mg/dl)</label>
                      <select name="liver" id="liver">
                          <option value="0">< 1.2</option>
                          <option value="1">1.2–1.9</option>
                          <option value="2">2.0–5.9 </option>
                          <option value="3">6.0–11.9</option>
                          <option value="4">>12.0 </option>
                      </select>
                  </div>

                  <div class = "select-container">
                      <label for="renalFunction" class = "labelpagetwomain">Renal Function: Creatinine (mg/dl) (or urine output)</label>
                      <select name="renalFunction" id="renalFunction">
                          <option value="0">< 1.2 </option>
                          <option value="1">1.2–1.9 </option>
                          <option value="2">2.0–3.4 </option>
                          <option value="3">3.5–4.9 (or < 500 ml/day)</option>
                          <option value="4">> 5.0 (or < 200 ml/day) </option>
                      </select>
                  </div>

                  <input type='submit' value='submit form' onclick = "getCardiovascular();return checkCardiovascularResult();"> 
          </form> 
        </div>

        <script src = "script.js"></script>
    </body>
</html>