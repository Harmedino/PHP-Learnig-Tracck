<?php 
$conn= mysqli_connect('localhost','root','','blog');

if ($conn) {
    // echo 'connected';
}else{
    echo 'connection error';
}
?>