
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
        <h2>Array</h2>
    </div>
    <!--index array-->
    <?php 
        $x=array(5,3,9,10,15);
        /*
        $x[0]=5;
        $x[1]=3;
        $x[2]=9;
        $x[3]=10;
        $x[4]=15;
        */
        echo $x[0];


        ?>
        <hr/>
        <!--index array length and count-->
        <?php 
        $x=array(5,3,9,10,15);
        $i;
        /*
        $x[0]=5;
        $x[1]=3;
        $x[2]=9;
        $x[3]=10;
        $x[4]=15;
        */
          $length=count($x);
          for($i=0;$i<$length;$i++){
            echo $x[$i] ."<br/>";
          }


        ?>
                <hr/>
        <!--assosiative array-->
        <?php 
       $age=array("karim"=>"25","rahim"=>"20","mamun"=>"22");
          
       /* other way
       $age ["karim"]="25;
       $age ["rahim"]="20;
       $age ["mamun"]="20;
*/

          foreach($age as $x =>$value){
              echo "name =".$x.",age =".$value."<br/>";
          }

        ?>
                        <hr/>
        <!--multidimensional array-->
  

        <?php 
            $cars=array(

                array("BMW",15,50),
                array("Volvo",20,5),
                array("saab",54,30)
            );

            /*echo $cars[0][0];
            echo "<br/>";
            echo $cars[1][0];*/

            for($row=0;$row<3;$row++){
                echo "<p>Row number $row</p>";
                echo "<ul>";
                for($col=0;$col<3;$col++){
                    echo "<li>".$cars[$row][$col]."</li>";
                }
               echo "</ul>";
            }

        ?>
   


</section>
</body>
</html>
