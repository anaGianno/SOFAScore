<!DOCTYPE html>
<html>
    <head>
        <title>SOFAScore</title>
        <link rel="stylesheet" href = "style.css">
    </head>
    <body>
        <!-- header -->
        <div class = "header">
          <p class = "title">index.php</p>
        </div>

        <form method="POST" name="form1"  action="sofa.php">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="sname">Surname:</label>
            <input type="text" id="sname" name="sname"><br><br>
            <label for="nhi">NHI number:</label>
            <input type="text" id="nhi" name="nhi"><br><br>
            <input type="submit" value="submit form"> 
        </form>

        <?php
            echo "test <br>";
            if(isset($_COOKIE["patient-nhi"])and isset($_COOKIE["patient-firstname"]) and isset($_COOKIE["patient-surname"])){
                $nhi = $_COOKIE["patient-nhi"];
                $fname = $_COOKIE["patient-firstname"];
                $sname = $_COOKIE["patient-surname"];
                echo "your firstname is: " . $fname . "<br>";
                echo "your surname is: " . $sname . "<br>";
                echo "your nhi is: " . $nhi . "<br>";
                $nhipattern = "/[A-Z][A-Z][A-Z][A-Z][0-9][0-9][0-9][0-9]/";
                echo "<p class = 'regex'> regex: ". preg_match($nhipattern,$nhi) ." </p>";
            }

        ?>
    </body>
</html>