<?php 
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        $msg="Jemoeteerstinloggen!";
        header("Location: ../login.php?msg=$msg");
        exit;
    }
    require_once('header.php');
    require_once('backend/config.php');

?>
    <main class="Orders_main">
    <?php
    require_once('backend/conn.php');

            $query = "SELECT o.order_number, s.status, o.email_recipient
            FROM orders o

            INNER JOIN status s 
                ON o.status = s.id";
            $statement = $conn->prepare($query);
            $statement->execute();
            $orders = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table class="Orders_table">
            <tr class="Orders_table_Headers">
                <th>order number</th>
                <th>status</th>
                <th>Products</th>
                <th>Email recipient</th>
            </tr>
            <?php foreach ($orders as $o): ?>
                <tr>
                    <td><?php echo $o["order_number"];?></td>
                    <td><?php echo $o["status"];?></td>
                    <td><?php echo "woep";?></td>
                    <td><?php echo $o["email_recipient"];?></td>
            <?php endforeach?>
        </table>
    </main>
    <div class="bottom">
<?php require_once('footer.php')?>
</div>
</body>
</html>