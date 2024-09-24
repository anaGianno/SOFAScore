<!DOCTYPE html>
<html>
    <head>
        <title>SOFAScore</title>
        <link rel="stylesheet" href = "../style/style.css">
    </head>
    <body>
        <!-- header -->
        <div class = "header">
          <p class = "title">sofa.php</p>
        </div>

        <?php
            $nhi = $_POST["nhi"];
            $fname = $_POST["fname"];
            $sname = $_POST["sname"];
            setcookie("patient-nhi",$nhi);
            setcookie("patient-surname",$sname);
            setcookie("patient-firstname",$fname);

            echo "your firstname is: " . $fname . "<br>";
            echo "your surname is: " . $sname . "<br>";
            echo "your nhi is: " . $nhi . "<br>";

            // header("Location: index.php");
            // exit();
        ?>

        <form method="POST" name="form1"  action="result.php">
                <label for="centralNervousSystem">Central nervous system</label>
                <label for="centralNervousSystem">Glasgow coma scale</label>
                <div class="slidecontainer">
                    <div class ="slidenumbercontainer">
                      <p style = "display:inline">Age: </p>
                      <p id ="agenumber"></p><br><br>
                    </div>

                    <input type="range" min="0" max="15" value="0" class="slider" name="centralNervousSystem" id="centralNervousSystem">
                </div>

                <!-- total cholesterol input -->
                <div class = "select-container">
                  <label for="cardiovascularSystem">Cardiovascular system</label>
                  <label for="cardiovascularSystem">Mean arterial pressure OR administration of vasopressors required</label>
                  <select name="cardiovascularSystem" id="cardiovascularSystem">
                    <option value="0">MAP ≥ 70 mmHg</option>
                    <option value="1">MAP < 70 mmHg</option>
                    <option value="2"> 	dopamine ≤ 5 μg/kg/min or dobutamine (any dose)</option>
                    <option value="3">dopamine > 5 μg/kg/min OR epinephrine ≤ 0.1 μg/kg/min OR norepinephrine ≤ 0.1 μg/kg/min</option>
                    <option value="4">dopamine > 15 μg/kg/min OR epinephrine > 0.1 μg/kg/min OR norepinephrine > 0.1 μg/kg/min</option>
                  </select>
                </div>

                <!-- total cholesterol input -->
                <div class = "select-container">
                  <label for="respiratorySystem">Respiratory system </label>
                  <label for="respiratorySystem">PaO2/FiO2 [mmHg (kPa)] </label>
                  <select name="respiratorySystem" id="respiratorySystem">
                    <option value="0">≥ 400 (53.3)</option>
                    <option value="1">< 400 (53.3)</option>
                    <option value="2">< 300 (40)</option>
                    <option value="3">< 200 (26.7) and mechanically ventilated including CPAP</option>
                    <option value="4">< 100 (13.3) and mechanically ventilated including CPAP</option>
                  </select>
                </div>

                <div class = "select-container">
                    <label for="coagulation">coagulation</label>
                    <label for="coagulation">Platelets (×103/μl) </label>
                    <select name="coagulation" id="coagulation">
                        <option value="0">≥ 150</option>
                        <option value="1">< 150</option>
                        <option value="2">< 100</option>
                        <option value="3">< 50</option>
                        <option value="4">< 20</option>
                    </select>
                </div>

                <div class = "select-container">
                    <label for="liver">liver</label>
                    <label for="liver">Bilirubin (mg/dl)</label>
                    <select name="liver" id="liver">
                        <option value="0">< 1.2 </option>
                        <option value="1">1.2–1.9</option>
                        <option value="2">2.0–5.9 </option>
                        <option value="3">6.0–11.9 </option>
                        <option value="4">>12.0 </option>
                    </select>
                </div>
    
                <div class = "select-container">
                    <label for="renalFunction">renalFunction</label>
                    <label for="renalFunction">Creatinine (mg/dl) (or urine output) </label>
                    <select name="renalFunction" id="renalFunction">
                        <option value="0">< 1.2 </option>
                        <option value="1">1.2–1.9 </option>
                        <option value="2">2.0–3.4 </option>
                        <option value="3">3.5–4.9 (or < 500 ml/day)</option>
                        <option value="4">> 5.0 (or < 200 ml/day) </option>
                    </select>
                </div>

                <input type='submit' value='submit form'> 
        </form>

        <script src = "../script/script.js"></script>
    </body>
</html>