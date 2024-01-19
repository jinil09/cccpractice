<?php
$a = 10;  // Example value for $a
$b = $a / (1 + 10/100);  // Calculate $b based on $a being 10% higher
$percent_lower = ($a - $b) / $a * 100;  // Calculate the percentage difference

echo "If \$a is $a% Higher Then \$b, Then \$b is $percent_lower% lower than \$a";
?>