<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <style>
        body{
            font-family: 'Fira Sans', sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        p{
            color:red;
        }
    </style>
</head>
<body>

<form method="post" action="">
    <label for="limit">Enter the number of rows to retrieve:</label>
    <input type="number" name="limit" id="limit" required>
    <input type="submit" value="Retrieve Rows" name="submit">
</form>
<?php

    $conn = mysqli_connect("localhost","root","","ccc_practice");
    $err = "";

    if(!$conn)
    {
        echo "There is Some Error in Connection";
    }else{

        $sqlcount = "SELECT COUNT(*) as total_rows FROM ccc_product";
        $countresult = $conn->query($sqlcount);
        $rowR = $countresult -> fetch_assoc();
        $totalRows = $rowR['total_rows'];
        echo "<p>Now there are total ".$totalRows." Rows Of data avaible.</p>";

        if(isset($_POST['submit'])){

            $limit = $_POST['limit'];

            $sql = "SELECT * FROM ccc_product ORDER BY id DESC LIMIT {$limit}";
            $result = $conn->query($sql);
    
    
            if ($result->num_rows > 0) {
                echo '<table>';
                echo '<tr>';
                // for Just Print only headers
                while ($row = $result->fetch_assoc()) {
                    foreach ($row as $key => $value) {
                        echo '<th>' . $key . '</th>';
                    }
                    break;
                }
                echo '</tr>';
            
                // fpr print data rows
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    foreach ($row as $key=>$value) {
                        echo '<td>' . $value . '</td>';
                    }
                    echo '</tr>';
                }
            
                echo '</table>';
            } else {
                echo 'No products found.';
            }
        }
        
    }
        
?>

</body>
</html>