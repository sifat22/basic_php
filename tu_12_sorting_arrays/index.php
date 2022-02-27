
<?php 

$fonts="areal";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>php syntax</title>
<style>
    .php-coding{width: 900px; margin:0 auto;background: 
    #ddd;padding: 20px;min-height: 400px;}
    .header-option, .footer{background: #444;color: #fff;
    text-align: center;
    padding: 20px;}
</style>
</head>
<body>
<section class="php-coding">
    <div class="header-option">
        <h2>Php sorting array</h2>
    </div>
<!--alpahbetically-->
    <?php 
    
        $names=array("rakib","mamun","akbar","badol");
        sort($names);
        $length=count($names);
        for($i=0;$i<$length;$i++){
            echo $names[$i]."<br/>";
        }
    
    ?>
    <hr/>
    <!--numerical-->
    <?php 
    
        $names=array(25,12,11,20);
        sort($names);
        $length=count($names);
        for($i=0;$i<$length;$i++){
            echo $names[$i]."<br/>";
        }
    
    ?>
     <hr/>
        <!--reverse-->
        <?php 
    
    $names=array(25,12,11,20);
    rsort($names);
    $length=count($names);
    for($i=0;$i<$length;$i++){
        echo $names[$i]."<br/>";
    }

?>


     
</section>
</body>
</html>