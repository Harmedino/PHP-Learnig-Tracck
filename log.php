    <?php
    require_once 'conn.php';
    session_start();

    


    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($_POST['submit'])) {
        
        if (!$email) {
            $_SESSION['emailError'] = 'Please fill in the email field';
            header( 'Location: login.php');
        }
        if(!$password){
            $_SESSION['passwordError'] = 'Please fill in the password field';
            header('Location: login.php');
        } else{
            $check = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");

            if(mysqli_num_rows($check) == 1){
                $user = mysqli_fetch_assoc($check);
                $hashedPassFromDatabase = $user['password'];
            
                if(password_verify($password, $hashedPassFromDatabase)){
                    // echo $user['name'];
                    $_SESSION['user'] = $user['name'];
                    header("Location: dashboard.php");
                } else {
                    $_SESSION['existError'] = 'Email or password does not exist';
                    header('Location: login.php');
                }
            
            } else {
                $_SESSION['existError'] = 'Email or password does not exist';
                header('Location: login.php');
            }
            
        }


        
    } else {
        echo "Reached else block"; 
        header('Location: login.php');
        die();
    }

    ?>