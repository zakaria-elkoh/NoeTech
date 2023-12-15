<?php
//   include '../../controller/auth/sign-up.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Mingle </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-black text-white">
   
    <form class="container w-25 py-5 mt-5" action="../../controller/auth/RegistrationController.php" method="post" >
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Full name:</label>
          <input name="fullName" type="text" placeholder='Full Name' class="form-control" id="exampleInputName" aria-describedby="emailHelp">
        </div>
        <!-- <div class="mb-3">
          <label for="exampleInputUser" class="form-label">User:</label>
          <input name="userName" type="text" placeholder='User Name' class="form-control" id="exampleInputUser" aria-describedby="emailHelp">
        </div> -->
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address:</label>
          <input name="email" type="email" placeholder='Email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password:</label>
          <input name="password" type="password" placeholder='Password' class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-3">Sign In</button>
    </form>

    <div class='text-center'>
      <a href="./log-in.php" >already have an account?</a>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>