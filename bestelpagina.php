<?php 
        require_once('backend/config.php');
        require_once('header.php');
?>
    <main>
        <div class="wrapper">
        <form action="../backend/tasksController.php" method="POST">
        <input type="hidden" name="action" value="update">
        <div class="form-group">
            <div class="form">
            <h1>Bestelpagina </h1>
                <label for="achternaam">Achternaam:</label>
                <input type="text" name="achternaam" id="achternaam" class="form-input">
            </div>
            <div class="form">
            <label for="naam">Naam:</label>
            <input type="text" name="naam" id="naam" class="form-input">
            </div>

            <div class="form">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-input">
            </div>

            <div class="form">
            <label for="nummer">Telefoon nummer:</label>
            <input type="tel" name="nummer" id="nummer" class="form-input">
            </div>
            <div class="form">
            <label for="adres">Adres:</label>
            <input type="number" name="naam" id="naam" class="form-input">
            </div>
            <input type="submit" value="Create Task">
            
        </div>
    </div>
    </main>
    <div class="bottom">
    <?php require_once('footer.php')?>
    </div>
</body>
</html>
