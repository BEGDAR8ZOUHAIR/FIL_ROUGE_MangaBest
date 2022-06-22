<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- bootstrap -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<!-- style -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous">
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    
  <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
  
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/login.css">
    
<!-- caoussel -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/theme.css">
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/caoussel.min.css">
<!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  
</style>

    <title>regester</title>
</head>
<body>

  
<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">

  
  
   
         

  <div class="main-block">
    <h1>Regester to be a momber</h1>
    <img class="backrond-image"   src="http://localhost/fileRougeMangaBest/Views/asset/image/tori  mangaa.png" alt="">
    <form action="http://localhost/fileRougeMangaBest/User/userSignUp" method="POST">
      
      <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
      <input type="text" name="email" id="email" placeholder="Email" required/>
      <label id="icon" for="name"><i class="fas fa-user"></i></label>
      <input type="text" name="name" id="name" placeholder="Name" required/>
      <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
      <input type="password" name="password" id="name" placeholder="Password" required/>
      <hr>
      <div class="gender">
        <input type="radio" value="Male" id="male" name="gender" checked/>
        <label for="male" class="radio">Male</label>
        <input type="radio" value="Female" id="female" name="gender" />
        <label for="female" class="radio">Female</label>
      </div>
      <hr>
      <div class="btn-block">
       
        <button   name="submit" type="submit" href="/index.php">Submit</button>
      </div>


      
    </form>
  </div> 
  
</div>
<?php include './includs/footer.php';?>
  </div>
  </div>
 

  

  
</body>
</html>
