<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php
            include("data.php");
            $ins = $base->prepare("UPDATE `inscription` SET `mdp` = MD5(:mdp) WHERE `inscription`.`id` = :id;");
            $ins->execute(array(
                "mdp"=>$_POST["mdp"],
                "id"=>$_GET["id"],
            ));
            // header("Location:connected.php");
        
        ?>
    
</body>
</html>