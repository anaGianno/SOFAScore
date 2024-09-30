<DOCTYPE !html>
<html>
    <head>
        <title>SOFAScore</title>
        <link rel="stylesheet" href = "style.css">
    </head>
    <body>
    <label class = "title">Result</label>
    <div class = 'div-container'>
        <?php
            // received posted subscores from sofa.php
            $centralNervousSystem = $_POST["centralNervousSystem"];
            $cardiovascularSystem = $_POST["cardiovascularSystem"];
            $respiratorySystem = $_POST["respiratorySystem"];
            $cpap = $_POST["cpap"];
            $coagulation = $_POST["coagulation"];
            $liver = $_POST["liver"];
            $renalFunction = $_POST["renalFunction"];
            $nhi = $_COOKIE["patient-nhi"];
            $fname = $_COOKIE["patient-firstname"];
            $sname = $_COOKIE["patient-surname"];

            // display subscores 
            echo "<label class = 'labelpagetwothreemain'  style = 'display:inline;'>First name: </label><p  style = 'display:inline;margin-right:5rem;'>" . $fname . " </p>";
            echo "<label class = 'labelpagetwothreemain'  style = 'display:inline;'>Surname:  </label><p  style = 'display:inline;margin-right:5rem;'>" . $sname . " </p>";
            echo "<label class = 'labelpagetwothreemain'  style = 'display:inline;'>NHI number: </label><p  style = 'display:inline;margin-right:5rem;'>" . $nhi . " </p><br><br><br>";
            echo "<label class = 'labelpagetwothreemain'>Central Nervous System </label><p>" . $centralNervousSystem . "</p><br>";
            echo "<label class = 'labelpagetwothreemain'>Cardiovascular System </label><p>" . $cardiovascularSystem . "</p><br>";

            // set score of respiratory to 2 if a large value was selected but cpap is no
            if($respiratorySystem > 2 and $cpap == "No"){
                $respiratorySystem = 2;
            }

            // display subscores 
            echo "<label class = 'labelpagetwothreemain'>Respiratory System </label><p>" . $respiratorySystem . "</p>";
            echo "<label class = 'labelpagetwothreemain'>(Mechanically ventilated including CPAP) </label><p>" . $cpap. "</p><br>";
            echo "<label class = 'labelpagetwothreemain'>Coagulation </label><p>" . $coagulation . "</p><br>";
            echo "<label class = 'labelpagetwothreemain'>Liver </label><p>" . $liver . "</p><br>";
            echo "<label class = 'labelpagetwothreemain'>Renal Function </label><p>" . $renalFunction . "</p><br>";

            // display final score
            echo "<label class = 'labelpagetwothreemain'>Overall Score </label><p> " . $centralNervousSystem + $renalFunction + $cardiovascularSystem + $respiratorySystem
                                    + $coagulation + $liver . "</p>";
        ?>
    </div>
        <script src = "script.js"></script>
    </body>
</html>