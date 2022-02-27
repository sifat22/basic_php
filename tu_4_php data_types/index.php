
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

        1.string
        2.integer
        3.float
        4.boolean
        5.array
        6.object
        7.null
        8.resources
    </br>
    <hr/>
    1.string
    <?php 
        $x="data types";
        echo $x;
        ?>
    <hr/>
    4.boolean
    <?php 
    $y=true;
    var_dump($y);
    
    ?>


        <hr/>
        6.object
        <?php 
        class Student{
            function department(){
                return "physics";

            }
            function details(){
               echo $this->department();
            }
        }
        $st=new Student();
        $st->details();
       
                
        
        ?>

        <hr/>
      


   




</section>
</body>
</html> 