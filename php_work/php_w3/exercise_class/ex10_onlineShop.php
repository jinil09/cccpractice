<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Product System</title>
</head>
<body>
    <form method="post">
        <label for="num1">Product Id</label>
        <input type="text" name="pId" >

        <label for="num2">Product Name:</label>
        <input type="text" name="p_name">

        <label for="num2">Price:</label>
        <input type="text" name="price">

        <button type="submit" name="submit">Submit</button>
        <button type="submit" name="show_data">Cart</button>
    </form>
    <br><br><br><br>

    <?php
class Product{
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }
    public function getName(){
        return $this->name;
    }
}

class ShoppingCart {
    private $items = [];

    public function addItem(Product $product) {
        $this->items[] = $product;
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function displayItems() {
        echo "<table border='1'>";
        echo "<caption>Shopping Cart Items</caption>";
        echo "<tr><th>Item Name</th><th>Price</th></tr>";
    
        foreach ($this->items as $item) {
            echo "<tr>";
            echo "<td>{$item->getName()}</td>";
            echo "<td>{$item->getPrice()} Rupee</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    public function removeItem($index) {
        unset($this->items[$index]);
    }
}


session_start();

if(!isset($_SESSION['cart']))
{
    return $_SESSION['cart']=new ShoppingCart();
}

$cart= $_SESSION['cart'];

if (isset($_POST['submit'])) {
    $pid = $_POST["pId"];
    $pname = $_POST["p_name"];
    $price = $_POST["price"];

    $product1 = new Product($pid, $pname, $price);
    $cart->addItem($product1);
}

if (isset($_POST["show_data"])) {
    $cart->displayItems();
    echo "<b>Total Price: " . $cart->calculateTotal() . " Rupee</b>";
}


$_SESSION['cart'] = $cart;//we need to store current obj data to with prev one.
// $cart->removeItem(4);
echo "<pre>";
print_r($_SESSION['cart']);

?>
</body>