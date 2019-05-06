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
                                echo "background-color: #000080;";
                                echo "color: white;";
                        }


                        ?>                    
                }
        </style>

</head>
<body>

<?php include_once "header.php"?>

<?php date_default_timezone_set('UTC+1');?>
<?php echo date('l jS \of F Y h:i:s A')       ?>

</body>
</html>