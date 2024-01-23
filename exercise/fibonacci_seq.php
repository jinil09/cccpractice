<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence</title>
    
</head>
<body>
    <h2>Fibonacci Sequence</h2>

    <form action="" method="post">
        <input type="number" placeholder="Enter the number of term" name="num" required>
        <input type="submit" value="Submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
            $n = $_POST["num"];
           
            
            if($n<1)
            {
                echo "Please Enter Possitive Number";
            }else{
                $k=0;
                $j=1;
                
                $firstPre = $k;
                $secondPre = $j;

                if($n == 1)
                {
                    echo "$k";
                }else{

                    echo "$k, $j,"; //initial val 0 and 1
    
                    for($i=3;$i<=$n;$i++)
                    {
                        if($i<$n)
                        {
                            $nextval= $firstPre + $secondPre;
                            echo " $nextval, ";
                            $firstPre = $secondPre;
                            $secondPre = $nextval;
                        }else{
                            $nextval= $firstPre + $secondPre;
                            echo " $nextval ";
                            $firstPre = $secondPre;
                            $secondPre = $nextval;
                        }
                    }
                }
            }

        } else {
            echo "<p>Please enter a valid number.</p>";

    }

    //We can Also Make Using array --> initially We add 0 and 1 and then add one by one
    // $fb = array();
    // $fb[] = 0;
    // $fb[] = 1;

    //     for ($i = 2; $i < $n; $i++) {
    //         $fb[] = $fb[$i - 1] + $fb[$i - 2];
    //     }
?>


</body>
</html>
