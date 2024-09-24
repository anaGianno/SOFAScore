<!DOCTYPE html>
<html>
    <head>
        <title>SOFAScore</title>
        <link rel="stylesheet" href = "style.css">
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
            header("Location: index.php");
            exit();
        ?>
    </body>
</html>