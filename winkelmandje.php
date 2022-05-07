<?php
require_once('backend/conn.php');
require_once('header.php');

$winkelwagentje = [
    2 => 2,
    3 => 1,
];

$hoeveelInWinkelwagentje = count($winkelwagentje);

$totalPrice = 0;

?>
<div class="Winkelmandje">
    <table >
        <thead>
            <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>

        <?php

            foreach($winkelwagentje as $productId => $amount){
                $query = ("SELECT * FROM products WHERE id = ". $productId .";");
                $statement = $conn->prepare($query);
                $statement->execute();
                $product = $statement->fetch(PDO::FETCH_ASSOC);
                $totalProductPrice = $product['price'] * $amount;
                $totalPrice = $totalPrice + $totalProductPrice;

                ?>
                <tr>
                    <td><?php echo $product['title']; ?></td>
                    <td><?php echo $product['description']; ?></td>
                    <td>&euro;<?php echo $product['price']; ?>,-</td>
                    <td><?php echo $amount ?></td>
                    <td>&euro;<?php echo $totalProductPrice; ?>,-</td>
                </tr>
                <?php
            }
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>&euro;<?php echo $totalPrice; ?>,-</td>
        </tr>
        </tbody>
        
    </table>
</div>

<div class="wrapper">
    <div class="tag">
        <a href="bestelpagina.php">bestellen</a>
    </div>
</div>
<div class="bottom">
<?php require_once('footer.php')?>
</div>
