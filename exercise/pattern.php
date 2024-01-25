<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    
</head>
<body>
    <h2>Factorial</h2>

    <form action="" method="post">
        <input type="number" placeholder="Enter the number" name="num" required>
        <input type="submit" value="Submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
            $n = $_POST["num"];

                // $fval = 1;
                // $nval= $n;
                // $spac = 0;
                // for($i=1;$i<=ceil($n/2);$i++){ 

                //     for($j=1;$j<=$spac;$j++)
                //     {
                //         echo "-";
                //     }
                //     for($j=$fval;$j<=$nval;$j++)
                //     {
                //         echo "$j";
                //     }
                //     for($j=1;$j<=$spac;$j++)
                //     {
                //         echo "-";
                //     }
                //     if($i<ceil($n/2)){
                        
                //         $spac++;
                //         $fval++;
                //         $nval--;
                //     }
                //     echo "<br>";
                // }
        
                // for($i=1;$i<=ceil($n/2)-1;$i++){ 

                //     $spac--;
                //     $fval--;
                //     $nval++;
                //     for($j=1;$j<=$spac;$j++)
                //     {
                //         echo "-";
                //     }
                //     for($j=$fval;$j<=$nval;$j++)
                //     {
                //         echo "$j";
                //     }
                //     for($j=1;$j<=$spac;$j++)
                //     {
                //         echo "-";
                //     }
                    
                //     echo "<br>";
                //     }

                for($i=1;$i<=$n;$i++){  
                    for($j=1;$j<=$n;$j++)
                    {
                        if($i <= $n/2)
                        {
                            if($j < $i || ($n-$i+1) < $j ){
                                echo "-";
                            }else{
                                echo "$j";
                            }

                        }else{
                            if($n%2==0 && $i ==($n/2)+1) continue;
                            if($j > $i || ($n-$i+1) > $j ){
                                echo "-";
                            }else{
                                echo "$j";
                            }
                        }
                    }
                    if($n%2==0 && $i ==($n/2)+1) continue;
                    echo "<br>";
                }

                // for($i=1;$i<=ceil($n/2);$i++){  
                //     for($j=1;$j<=$n;$j++)
                //     {
                //         if($j < $i || ($n-$i+1) < $j ){
                //             echo "-";
                //         }else{
                //             echo "$j";
                //         }
                //     }
                //     echo "<br>";
                // }
                // for($i=ceil($n/2)-1;$i>=1;$i--){  
                //     for($j=1;$j<=$n;$j++)
                //     {
                //         if($j < $i || ($n-$i+1) < $j ){
                //             echo "-";
                //         }else{
                //             echo "$j";
                //         }
                //     }
                //     echo "<br>";
                // }
               
                
                
    }
                
                

        

?>


</body>
</html>
