<DOCTYPE !html>
<html>
    <head>
        <title>SOFAScore</title>
        <link rel="stylesheet" href = "style.css">
    </head>
    <body>

        <?php
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

            echo "your firstname is: " . $fname . "<br>";
            echo "your surname is: " . $sname . "<br>";
            echo "your nhi is: " . $nhi . "<br>";

            echo "centralNervousSystem: " . $centralNervousSystem . "<br>";

            echo "cardiovascularSystem: " . $cardiovascularSystem . "<br>";

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
        <script src = "script.js"></script>
    </body>
</html>