<DOCTYPE !html>
<html>
    <head>
        <title>SOFAScore</title>
        <link rel="stylesheet" href = "../style/style.css">
    </head>
    <body>
        <div class = "header">
          <p class = "title">result.php</p>
        </div>

        <?php
            $centralNervousSystem = $_POST["centralNervousSystem"];
            // $cardiovascularSystem = $_POST["cardiovascularSystem"];
            $map = $_POST["map"];
            $dopamine = $_POST["dopamine"];
            $dobutamine = $_POST["dobutamine"];
            $epinephrine = $_POST["epinephrine"];
            $norepinephrine= $_POST["norepinephrine"];
            $respiratorySystem = $_POST["respiratorySystem"];
            // $cpapTrue = $_POST["cpapTrue"];
            // $cpapFalse = $_POST["cpapFalse"];
            $cpap = $_POST["cpap"];
            $coagulation = $_POST["coagulation"];
            $liver = $_POST["liver"];
            $renalFunction = $_POST["renalFunction"];
            setcookie("patient-nhi",$nhi);
            setcookie("patient-surname",$sname);
            setcookie("patient-firstname",$fname);

            $nhi = $_COOKIE["patient-nhi"];
            $fname = $_COOKIE["patient-firstname"];
            $sname = $_COOKIE["patient-surname"];

            echo "your firstname is: " . $fname . "<br>";
            echo "your surname is: " . $sname . "<br>";
            echo "your nhi is: " . $nhi . "<br>";

            echo "centralNervousSystem: " . $centralNervousSystem . "<br>";



            // echo "cardiovascularSystem: " . $cardiovascularSystem . "<br>";

            // echo "cpapTrue: " . $cpapTrue. "<br>";
            // echo "cpapFalse: " . $cpapFalse . "<br>";
            echo "cpap: " . $cpap. "<br>";
            if($respiratorySystem > 2 and $cpap == "false"){
                $respiratorySystem = 2;
            }

            echo "respiratorySystem: " . $respiratorySystem . "<br>";
            echo "coagulation: " . $coagulation . "<br>";
            echo "liver: " . $liver . "<br>";
            echo "renalFunction: " . $renalFunction . "<br>";

            echo "overall score: " . $renalFunction + $cardiovascularSystem + $respiratorySystem
                                    + $coagulation + $liver . "<br>";
        ?>
    </body>
</html>