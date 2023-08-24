<!DOCTYPE html>
<head>
 
    <title>Php class</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    

</head>
<body>
    <?php 
    session_start() 
    ?>
    
<form action="reg.php" method="post" class='container card shadow mt-5'>

    <h1 class="text-center">SIGN IN</h1>

   <div class="form-group">
    <label for="name">Name</label>
   <input type="text" name="name" class="form-control">
    <?php if(isset($_SESSION['nameError'])){
       echo " <span class='text-danger'>". $_SESSION['nameError']." </span> ";

        
    } unset($_SESSION['nameError'])  ?>
   </div>
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
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</html>                                                                                                                             