<?php session_start(); ?>
<?php require_once('header.php')?>
    <main>
        <div class="login_main">
            <form class="login_form" action="backend/loginController.php" method="POST">
            <h3>Login Here</h3>

            <label id="username" for="username">Username</label>
            <input id="username_input" name="username"  type="text" class="login_form_input">

            <label id="password"  for="password">Password</label>
            <input id="password_input" name="password" type="password" class="login_form_input">
            <div>
                <input type="submit" value="Log In" id="login_button">
            </div>
            </form>
            <?php 
			if(isset($_SESSION['message'])){
				?>
				<div class="alert_message">
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}
		?>
        </div>
        
    </main>
    <div class="bottom">
<?php require_once('footer.php')?>
</div>
</body>
</html>