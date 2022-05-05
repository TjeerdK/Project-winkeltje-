<?php 
        require_once('backend/config.php');
        require_once('header.php');
?>
    <main>
    <?php
            require_once('backend/conn.php');
            $query = "SELECT * FROM products ";
            $statement = $conn->prepare($query);
            $statement->execute();
            $product = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table>
            <tr>
                <th>name</th>
                <th>price</th>
                <th>stock</th>
                <th>description</th>
                <th>catagory</th>
                <th>img_dir</th>
            </tr>    
            <?php foreach ($product as $p): ?>
                <tr>
                    <td><?php echo $p["name"];?></td>
                    <td><?php echo $p["price"];?></td>
                    <td><?php echo $p["stock"];?></td>
                    <td><?php echo $p["description"];?></td>
                    <td><?php echo $p["catagory"];?></td>
                    <td><?php echo $p["img_dir"];?></td>
            <?php endforeach ?>
        </table>
    </main>
    <div class="bottom">
    <?php require_once('footer.php')?>
    </div>
</body>
</html>
