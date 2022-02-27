
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
        <section class="main-content">
            PHP functions
            <hr/>

                <?php 
                function school($name,$year){
                    echo "$name is started $year <br/>";

                }
                school("jatrabari high school","1975");
                school("AL high school","2001");
                school("BL high school","1870");
                
                
                ?>
                </hr>
                <hr/>
                <?php 
                function school1($name="my school"){
                    echo "$name is good <br/>";
                }
                school1("AB high schhol");
                school1();
                school1("AC high schhol");
                school1("AD high schhol");
                
                
                ?>
                <hr/>
                <hr/>
                <!--value return-->
                <?php 
                function sum($x ,$y){
                    $z=$x+$y;
                    return $z;
                }
                echo "5+10=".sum(5,10);

                
                ?>
        </section>

    
</section>
</body>
</html>