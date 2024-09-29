<!DOCTYPE html>
<html>
    <head>
        <title>SOFAScore</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href = "style.css">
    </head>
    <body>
        <label class = "title">SOFA Score</label>

        <?php
            $nhi = "";
            $fname = "";
            $sname = "";
            if(isset($_COOKIE["patient-nhi"])and isset($_COOKIE["patient-firstname"]) and isset($_COOKIE["patient-surname"])){
                $nhi = $_COOKIE["patient-nhi"];
                $fname = $_COOKIE["patient-firstname"];
                $sname = $_COOKIE["patient-surname"];
            }
                echo "  <form method='POST' name='form1'  action='sofa.php' autocomplete='off'>
                            <div class = 'div-container'>
                                <label for='fname' class = 'labelpageonefname'>First name</label>
                                <input   type='text'  id='fname' name='fname' value= '".$fname."'><br><br>
                                <label for='sname' class = 'labelpageone'>Surname</label>
                                <input  type='text'  id='sname' name='sname' value= '".$sname."'><br><br>
                                <label for='nhi' class = 'labelpageone'>NHI number</label>
                                <input  type='text' id='nhi' name='nhi' value= '".$nhi."'><br><br>
                                <input class ='buttontest' type='submit' value='SUBMIT FORM' onclick='return checknhi()'> 
                            </div>
                        </form>";

        ?>

        <!-- reference script -->
        <script src = "script.js"></script>
    </body>
</html>