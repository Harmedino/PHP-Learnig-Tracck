<?php 

require_once 'conn.php';
session_start();

$userId = $_GET['id'];

$userLog = mysqli_query($conn, "SELECT * FROM users WHERE id = '$userId' ");

if(mysqli_num_rows($userLog) == 1){
    $user = mysqli_fetch_assoc($userLog);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <form action="execute.php" method="post" class='container card shadow mt-5 p-4'>
      <div class="form-group">
      <label for="name">Name</label>
      <input type="text" value="<?php echo $user['name']; ?>" class="form-control" name="name">
        
      </div>
      <div class="form-group">
      <label for="name">Email</label>
        <input type="email"  value=<?php echo $user['email']  ?> class="form-control" name="email">
      </div>
      <div class="w-25">
      <input name="submit" type="submit" value="Update" class="btn btn-success">
      </div>
    </form>
</body>
</html>
