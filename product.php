<?php require_once './header.php'; ?>
<main>
<div class="container_prodcut">
        <?php
        require_once 'backend/conn.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM products WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);
        $product = $statement->fetch(PDO::FETCH_ASSOC);
        
        ?>
        <div class="product_info">
            <div class="product_info_item">
                <h1><?php echo $product["title"];?></h1>
                <P><span class="product_info_item_color"> in stock:</span> <?php echo $product["stock"];?></P>
                <P><span class="product_info_item_color"> Price:</span> <?php echo $product["price"];?></P>
                <P class="product_info_item_color">description: </P>
                <p><?php echo $product["description"];?></p>
            </div>
            <img  src="<?php echo $product["img_dir"];?>" alt="Albeelding_<?php echo $product["title"];?>">
        </div>
    </div>  
</main>
</body>
</html>