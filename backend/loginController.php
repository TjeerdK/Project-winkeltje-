<?php 
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];


    require_once '../backend/conn.php';
    $query = "SELECT * FROM users WHERE username = :username";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":username" => $username
    ]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    
    // var_dump($user);
    // var_dump($user['password']);
    if($statement->rowCount()<1)
    {
        $_SESSION['message'] = 'account bestaat niet';
        var_dump($_SESSION['message']);
        header("Location: ../login.php");
        die();
    }
    if(!password_verify($password, $user['password']))
    {
        $_SESSION['message'] = 'wachtwoord niet juist';
        var_dump($_SESSION['message']);
        header("Location: ../login.php");
        die();
    }
    $_SESSION['user_id'] = $user['id'];
    header("Location: ../bestellingen.php");
?>