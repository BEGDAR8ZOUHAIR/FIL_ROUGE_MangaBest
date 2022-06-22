<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- bootstrap -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/bootstrap.min.css">
<!-- style -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/navbar.css">
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/ithem.css">
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/genres.css">
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/app.js">
    
<!-- caoussel -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/theme.css">
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/caoussel.min.css">
<!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Home</title>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">

            <!-- navBar -->
         <!-- include header her -->
        <?php include './includs/header.php';?>
      <!-- end navBar -->

      <!-- carousel -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" style="height: 10px;width: 10px;border-radius: 50%;" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" style="height: 10px;width: 10px;border-radius: 50%;" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" style="height: 10px;width: 10px;border-radius: 50%;" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="http://localhost/fileRougeMangaBest/Views/asset/image/imgCar2.png" class="d-block w-100"  alt="http://localhost/fileRougeMangaBest.">
          </div>
          <div class="carousel-item">
            <img src="http://localhost/fileRougeMangaBest/Views/asset/image/imgCar1.png" class="d-block w-100"  alt="http://localhost/fileRougeMangaBest.">
          </div>
          <div class="carousel-item">
            <img src="http://localhost/fileRougeMangaBest/Views/asset/image/imgCar3.png" class="d-block w-100"  alt="http://localhost/fileRougeMangaBest.">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- end carousel -->

     <!-- mangas -->
      <section>
        <div class="large-6 columns my-5">
            <div style='width:100%' class="owl-theme  row">
             
            <?php
        if(isset($data)){
          foreach($data as $row){
            $image = $row['image'];
            $image = 'http://localhost/fileRougeMangaBest/Views/asset/image/Chapter1/'.$image;
            
            
           echo   "<div class='col-6 col-md-4 col-lg-3 my-3'>
           <div class='item'>";
           if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
            echo "<a href='http://localhost/fileRougeMangaBest/Manga/delete/" . $row["id"]. "'>
            <button type='button' class='position-absolute top-0 end-0  rounded px-1 m-2 ico-pages bg-danger'>Delet</button>
         </a>";}

         if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
          echo "<a href='http://localhost/fileRougeMangaBest/Manga/updateManga/" . $row["id"]. "'>
          // <button type='button' class='position-absolute top-0 start-50  rounded px-1 m-2 ico-pages bg-success'>Update</button>

       </a>";}
            echo "<a href='http://localhost/fileRougeMangaBest/Manga/detaills/" . $row["id"]. "' >
                    <span class='position-absolute top-0 start-0 badge bg-warning' style='font-weight: 500;z-index: 1;'>" . $row["status"]. "</span>
                    <span class='position-absolute bottom-0 end-0  rounded px-1 m-2 ico-pages' >" . $row["id"]. "</span>
                   

                
                    <div class='slide-info'>
                        <h4 class=' d-block   demo'>" . $row["title"]. "</h4>
                  
                        <p class='m-0' style='font-size: 13px;color: #adadad;' >" . $row["sous-title"]. "</p>
                        <p class='m-0' style='font-size: 13px;color: #adadad;' >" . $row["date"]. "</p>
                      
                    </div>
                    <div class='slide-image' style='background-image: url(".$image.");'>
                    </div>
                    </a>
                </div>
              </div>";
            }
          }else {
        echo "0 results";
      }
          ?>
     

    
            </div>

        </div>
      </section>
      <!-- end manga -->
      

<!-----------------------------------------------------------------  content ----------------------------------------------------------------->
<div class="row mx-0 my-3">

<!--------------------------------------------------------------- end content -->

<div class="my-4">
  <p class="ico-genres"><span style="background: url(http://localhost/fileRougeMangaBest/Views/asset/image/icon/ico_rank.png) no-repeat;display: inline-block;width: 40px;height: 30px;"></span>New</p>
</div>
        <div class="col-md-8 col-12">



           <div class="row px-2">

            
             
          <!-- ithem -->
       <?php
        if(isset($data)){
          foreach($data as $row){
            $image = $row['image'];
          $image = 'http://localhost/fileRougeMangaBest/Views/asset/image/Chapter1/'.$image;
         
           echo   "<div class='col-6 col-md-4 col-lg-3 my-3'>
                <div class='item'>
                  <a href='http://localhost/fileRougeMangaBest/Manga/detaills/" . $row["id"]. "' >
                    <span class='position-absolute top-0 start-0 badge bg-warning' style='font-weight: 500;z-index: 1;'>" . $row["status"]. "</span>
                    <span class='position-absolute bottom-0 end-0  rounded px-1 m-2 ico-pages' >64</span>
                
                    <div class='slide-info'>
                        <h4 class=' d-block   demo'>" . $row["title"]. "</h4>
                        <p class='m-0' style='font-size: 13px;color: #adadad;' >" . $row["date"]. "</p>
                        <p class='m-0' style='font-size: 12px;'>" . $row["genre"]. "</p>
                    </div>
                    <div class='slide-image' style='background-image: url(".$image.");'>
                    </div>
                  </a>
                </div>
              </div>";
            }
      } else {
        echo "0 results";
      }
          ?>
     

           </div>
        </div>
<!--------------------------------------------------------------- end content -->

<!--------------------------------------------------------------- side bar -->
<div class="col-md-4 col-12 border-start px-4">
  <!-- side bar title -->
      <div>
        <strong style="font-size: 24px;"><span class="ico-fire"></span> You may also like</strong>
      </div>
  <!-- end side bar title -->
  <!-- side bar ithem -->
      <div class="row">

       
      <?php
       if(isset($data)){
        foreach($data as $row){
          $image = $row['image'];
          $image = "http://localhost/fileRougeMangaBest/Views/asset/image/Chapter1/".$image;


         echo"<div class='col-12   my-3'>
          <a href='http://localhost/fileRougeMangaBest/Manga/detaills/" . $row["id"]. "'  class='row link-side'>
          <!-- image manga -->
            <div class='col-4 col-lg-4'>
              <div class='item' style='height: 130px;'>
                
                  <span class='position-absolute top-0 start-0 badge bg-warning' style='font-weight: 500;z-index: 1;'>" . $row["status"]. "</span>
                  <span class='position-absolute bottom-0 end-0  rounded px-1 m-2 ico-pages'style='background-color: rgba(97, 97, 97, 0.555);'>64</span>
                  <div class='slide-image' style='background-image: url(".$image.");height: 150px;'>
                  </div>
                
              </div>
              
            </div>
          <!--end image manga -->
          <!-- description manga -->
            <div class='col-7 col-lg-7 p-0'>
              <h4 class='demo'>" . $row["title"]. "</h4>
              <p class='m-0' style='font-size: 13px;color: #adadad;' >" . $row["date"]. "</p>
              <p class='m-0 side-desc'>I don't think my new roommate is human I don't think my new roommate is human.</p>
            </div>
  
          </a>
          <!-- end description manga -->
        </div>";
        }
      } else {
        echo "0 results";
      }
      ?>

     

  

  
      
    </div>
<!--------------------------------------------------------------- end side bar -->


   </div>
<!----------------------------------------------------------------- end content ----------------------------------------------------------------->

<!-- button top -->
<a href="#Top"><img class="btnTop position-fixed bottom-0 end-0 m-4 p-2 rounded-circle " src="http://localhost/fileRougeMangaBest/Views/asset/image/icon/toTop.png" alt="to Top"></a>
<!-- end button top -->

<!-- Footer -->
<?php include './includs/footer.php';?>
<!-- end footer -->

    </div>
  </div>
</div>


<!--  -->

<script src="http://localhost/fileRougeMangaBest/Views/asset/js/bootstrap.min.js"></script>
    <script src="http://localhost/fileRougeMangaBest/Views/asset/js/jquery.min.js"></script>


    
    <script>
      $(window).on('scroll', function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > 200) {
          $('.btnTop').stop().animate({opacity: "1",transition: "0.5s"},200);
      }
      else {
          $('.btnTop').stop().animate({opacity: "0",transition: "0.5s"},200);
      }
  });



        $(document).ready(function () {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                responsive: {
                    0: {
                        items: 2,
                        nav: true
                    },
                    500: {
                        items: 3,
                        nav: true
                    },
                    700: {
                        items: 4,
                        nav: true
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: true
                    },
                    1200: {
                        items: 7,
                        nav: true,
                        loop: true
                    }
                },

                margin:10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true
            });


        })
    </script>
    <script src="http://localhost/fileRougeMangaBest/Views/asset/dist/owl.carousel.js"></script>

    
</body>
</html>