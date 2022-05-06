<?php 
        require_once('backend/config.php');
        require_once('header.php');
?>
    <main class="Products_main">
    <?php
            require_once('backend/conn.php');
            $query = "SELECT p.title, p.price, p.stock, p.description, c.name, p.img_dir
            FROM products p

            INNER JOIN categories c 
                ON p.category = c.id";

            $statement = $conn->prepare($query);
            $statement->execute();
            $product = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <?php foreach ($product as $p): ?>
        <div class="index_product">
            <h2><a href=""><?php echo $p["title"];?></a></h2>
            <p>Price: <?php echo $p["price"];?></p>
            <p>In stock: <?php echo $p["stock"];?></p>
            <p><?php echo $p["description"];?></p>
            <p>category: <?php echo $p["name"];?></p>
            <div class="logo">
            <img  src="<?php echo $p["img_dir"];?>" alt="Albeelding">
            </div>
        </div>
        <?php endforeach ?>
    </main>
    <div class="bottom">
    <?php require_once('footer.php')?>
    </div>
</body>
</html>
