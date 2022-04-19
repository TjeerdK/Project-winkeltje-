<?php require_once('header.php')?>
    <main>
        <div class="login_main">
            <form class="login_form" action="backend/loginController.php" method="POST">
                <div class="login_form_group">
                    <label for="username">Gebruikersnaam:</label>
                    <input name="username" id="username"type="text" class="login_form_input">
                </div>
                <div class="login_form_group">
                    <label for="password">Wachtwoord:</label>
                    <input id="password" name="password" type="password" class="login_form_input">
                </div> 
                <div>
                    <input type="submit">
                </div>
            </form>
        </div>
    </main>
    <?php require_once('footer.php')?>
</body>
</html>