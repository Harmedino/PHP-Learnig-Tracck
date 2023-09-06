<!DOCTYPE html>
<head>
 
    <title>Php class</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    

</head>
<body>
    <?php 
    session_start() 
    ?>
    
<form action="log.php" method="post" class='container card shadow mt-5 p-4'>

    <h1 class="text-center">SIGN IN</h1>

  
   <div class="form-group">
    <label for="email">Email</label>
   <input type="email" name="email" class="form-control">
    <?php if(isset($_SESSION['emailError'])){
       echo " <span  class='text-danger'>". $_SESSION['emailError']." </span> ";

        
    } unset($_SESSION['emailError'])  ?>
   </div>
   <div class="form-group">
    <label for="password">Password</label>
   <input type="password" name="password" class="form-control">
    <?php if(isset($_SESSION['passwordError'])){
       echo " <span  class='text-danger'>". $_SESSION['passwordError']." </span> ";

        
    } unset($_SESSION['passwordError'])  ?>
   </div>
   <?php if(isset($_SESSION['existError'])){
       echo " <span  class='text-danger mt-3 mb-3'>". $_SESSION['existError']." </span> ";

        
    } unset($_SESSION['existError'])  ?>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    <p class="mt-3">Don't have an account? <a href="index.php">Register</a></p>

</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</html>                                                                                                                             