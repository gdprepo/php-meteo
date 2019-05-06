<!DOCTYPE html>
<html>
<head>
<title><?php echo "Meteo"; ?></title>
<?php include_once "include-header.html"?>
        <style>
                body{
                        <?php 
                        $day = date('H');
                        if ($day < "19" && $day > "7") {
                                echo "background-color: white;";
                                echo "color: black;";
                        } else {
                                echo "background-color: blue;";
                                echo "color: white;";
                        }


                        ?>                    
                }
        </style>


</head>
<body>

<?php include_once "header.php"?>

<?php 
        for ($i=0; $i<4; $i++) {
                echo '<a href="https://www.prevision-meteo.ch/meteo/localite/bordeaux"><img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_'.$i.'.png" width="650" height="250" /></a>';
        }
?>




</body>
</html>