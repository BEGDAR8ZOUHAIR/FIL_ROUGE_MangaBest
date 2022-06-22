
 <!-- login page -->

<!DOCTYPE html>
<html>
  <head>
    <title>login MangaBest</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/loginuser.css">

  </head>
  <body>


     <!-- login -->
  
    <form action="http://localhost/fileRougeMangaBest/User/userLogin" method="POST">
      <h1>Login</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
        <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
      </div>
      <button name="submit" type="submit">Login</button>
   
    </form>
  </body>
</html>