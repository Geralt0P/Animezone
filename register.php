<?php
require_once "config.php";

$username = $password = $email = "";
$username_err = $password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty

        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

             // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        
    }

    mysqli_stmt_close($stmt);

    // Check for password
if(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

//check for email

    $email = trim($_POST['email']);




// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err))
{
    $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $param_email = $email;

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: account.html");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>
