<pre><?php


function findFactors($number) {
    $factors = [];

    for ($i = 1; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $factors[] = $i;
            if ($i != $number / $i) {
                $factors[] = $number / $i;
            }
        }
        print_r($factors)."<br>";
    }

    return $factors;
}

$number = 36;
$factors = findFactors($number);
sort($factors);
echo "Factors of number($number): " . implode(', ', $factors)."<br>";


// ----------------------------------------------


function calculateHandshakes($members) {
    $handshakes = $members * ($members - 1) / 2;
    return $handshakes;
}


$numberOfMembers = 10;
$result = calculateHandshakes($numberOfMembers);

echo "Number of handshakes for $numberOfMembers members: $result<br>";

