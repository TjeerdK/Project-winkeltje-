<?php
require_once('backend/conn.php')

$winkelwagentje = [
    6 => 2,
    7 => 1,
];

$hoeveelInWinkelwagentje = count($winkelwagentje);

$totalPrice = 0;

?>
<table>
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
            $stmt = $db->prepare("SELECT * FROM products WHERE id = ". $productId .";");
            $stmt->execute();
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            $totalProductPrice = $product['price'] * $amount;
            $totalPrice = $totalPrice + $totalProductPrice;

            ?>
            <tr>
                <td><?php echo $product['name']; ?></td>
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
