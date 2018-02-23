<!DOCTYPE html>
<html>
    <head>
        <title>EPL Table</title>
        <link type="text/css" rel="stylesheet" href="css/mystyles.css">
        
    </head>
    <body>
         <header style = "text-align:center; font-size:25px"><h1><font face="verdana" color="gray" >Premier League Table</h1></header>
        
        <br><br><br>
        <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           #    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           Team &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           GP   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           W    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           D    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           L    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           GF    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           GA   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           GD   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           PTS</p>
        <div>
            <?php
                
                include 'arrays.php';
                
                
                $count = 1;
                $num = rand(1, 20);
                foreach ($logos as $key => $value) {
                     echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                     echo "$count";
                     if(count < 10)
                     {
                         echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                     }
                     else {
                         echo "&nbsp&nbsp&nbsp&nbsp";   
                     }
                     
                     echo "<div style=\"display: inline-block;\">";
                     echo "<img class = \"logo\" src=$key>";
                     
                     echo "$stats[$count]";
                     echo "</div>";
                     echo "<br><br>";
                     $count++;
                     
                }
                if($count > 20)
                     {
                         //$key = $num;
                         
                         echo "<br><br>";
                         echo "<div style='text-align: center;'>";
                         echo "<img src =  $logosSwitched[$num]>";
                         echo "</div>";
                         //echo "";
                     }
                     
                    for($i = 0; $i < 2; $i++)
                    {
                        asort($logosSwitched);//sort according to the value, ascending order
                        arsort($logosSwitched);//sort according to the value, descending order
                        ksort($logosSwitched);//sort according to the key, ascending order
                        krsort($logosSwitched);//sort according to the key, descending order
                    }
                    
            ?>
        </div>
        
        
        <footer style="text-align: center;"> <br><br>Table for the 2016/2017 season</footer>
    </body>
</html>