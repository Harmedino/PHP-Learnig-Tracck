    <?php
    require_once 'conn.php';
    session_start();

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        if (!$name) {
            header('Location: admin.php'); 
            die();
        } else {
                echo 'submit';
                $query = "UPDATE users SET name = '$name' WHERE email = '$email'";
                mysqli_query($conn, $query);
                header('Location: admin.php');
                die();
            
        }
        
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        // Perform the deletion operation
        $query = "DELETE FROM users WHERE id = $id";
        mysqli_query($conn, $query);
    
        // Redirect back to admin.php after deletion
        header('Location: admin.php');
        exit();
    }
     else {
        header('Location: admin.php');
        die();
    }
    ?>
