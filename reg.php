<?php  
 $_name = $_POST['name'];
 $_email = $_POST['email'];
if (isset($_POST['submit'])) {

    if (!$_name || !$_email) {
       echo "fields cannot be empty";
    } else {
        echo  $_name.' '.$_email;
    }
} else {
    echo 'Error';
}


 

?>