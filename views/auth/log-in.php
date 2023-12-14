
<?php

//   require '../../controller/auth/log-in.php';

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

    <form class="container w-25 py-5 mt-5" method="POST" action="../../controller/auth/LogInController.php">
        <div class="mb-3">
          <label for="exampleInputUser" class="form-label">Email:</label>
          <input name="email" type="text" placeholder='Email' class="form-control" id="exampleInputUser" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password:</label>
          <input name="password" type="password" placeholder='Password' class="form-control" id="exampleInputPassword1">
        </div>
        <button name='login' type="submit" class="btn btn-primary mt-3">Log in</button>
    </form>

    <div class='text-center'>
      <a href="./register.php" >do not have an account?</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  </body>
</html>