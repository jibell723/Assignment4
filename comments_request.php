<?php
    session_start();
    require('database.php'); 
    $user_name = filter_input(INPUT_POST, 'uname');
    $password = filter_input(INPUT_POST, 'password');
    $first_name = filter_input(INPUT_POST, 'firstname');
    $last_name = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');
    
    // Checks if any of the required fields are empty
    $isComplete = true;
    
    if($username == '' || $password == '' || $first_name == '' || $last_name == '' || $email == ''){
        $isComplete = false;
        $error = "All fields must be completed";
        echo $error;
    }
    
    // Checks if email is a valid email address
    if($isComplete && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $isComplete = false;
        $error = "Email address is invalid";
        echo $error;
    }
            
  
    
    // inserts user's information into users table
    $register = "INSERT INTO users (username, password, first_name, last_name, email) VALUES ('$user_name', '$password', '$first_name', '$last_name', '$email')";
    $statement3 = $db->prepare($register);
    $statement3->execute();
    $statement3->closeCursor();
    
    // checks if the users table contains information. If not, an error is issued
    $sql = "SELECT count(*) as numUsers FROM users WHERE username='$user_name' AND password='$password'";
    $statement4 = $db->prepare($sql);
    $statement4 = execute();
    $row = $statement4->fetchAll();
    
    $count = $row['numUsers'];
    
    if($count > 0){
        $_SESSION['uname'] = $user_name;    
    }
    else{
        echo "The username and/or password is invalid";
    }
    
  ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Comments</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <header>
            <h1>We welcome your comments!</h1>
        </header>
        
        <main>
            <h2>Please enter your comments here:</h2>
            <form action="display_comments.php" method="POST">
                <textarea name="comment" rows="4" cols="50"></textarea>
                <input type="submit" value="Submit" id="submit" />
            </form>
        </main>
    </body>
</html>


