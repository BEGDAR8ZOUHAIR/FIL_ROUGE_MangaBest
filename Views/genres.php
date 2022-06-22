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
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/genres.css">
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/ithem.css">
<!-- caoussel -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/theme.css">
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/caoussel.min.css">
<!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  
  
</style>

    <title>Home</title>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">

            <!-- navBar -->
            <?php include './includs/header.php';?>

<!-- categores -->
<div class="my-4 px-5">
  <p class="ico-genres"><span style="background: url(http://localhost/fileRougeMangaBest/Views/asset/image/icon/ico_rank.png) no-repeat;display: inline-block;width: 40px;height: 30px;"></span>Genres</p>
</div>


<div class="col-12 my-5 categories ">
<ul class="my-3 px-4">
  <li class="categorie-Active"><a href="http://localhost/fileRougeMangaBest/Manga/genres">All</a></li>
  <li><a href="http://localhost/fileRougeMangaBest/Manga/getGenre/1">Complete</a></li>
  <li><a href="http://localhost/fileRougeMangaBest/Manga/getGenre/2">Drama</a></li>
  <li><a href="http://localhost/fileRougeMangaBest/Manga/getGenre/3">Action</a></li>
  <li><a href="http://localhost/fileRougeMangaBest/Manga/getGenre/4">Comedy</a></li>
  <li><a href="http://localhost/fileRougeMangaBest/Manga/getGenre/5">Ecchi</a></li>
  <li><a href="http://localhost/fileRougeMangaBest/Manga/getGenre/6">Fantasy</a></li>
  <li><a href="http://localhost/fileRougeMangaBest/Manga/getGenre/7">Horror</a></li>
  <li><a href="http://localhost/fileRougeMangaBest/Manga/getGenre/8">Mystery</a></li>
  <li><a href="http://localhost/fileRougeMangaBest/Manga/getGenre/9">Sci-fi</a></li>
  <li><a href="http://localhost/fileRougeMangaBest/Manga/getGenre/10">Shoujo</a></li>
  <li><a href="http://localhost/fileRougeMangaBest/Manga/getGenre/11">Shoujo Ai</a></li>
  
  
</ul>
</div>
<!-- end categores -->

<!-----------------------------------------------------------------  content ----------------------------------------------------------------->
<div class="row mx-0 my-3">



  <div  class="row">
     <?php foreach ($data as $manga) { 
      $image = "http://localhost/fileRougeMangaBest/Views/asset/image/Chapter1/".$manga['image'];
      ?>
           <div class="col-3">
             <div class="my-3">
               <div class="item">
             
                      <a href="http://localhost/fileRougeMangaBest/Manga/detaills/<?php echo $manga["id"]; ?>" >
                      <span class="position-absolute top-0 start-0 badge bg-warning" style="font-weight: 500;z-index: 1;">Up</span>
                      <span class="position-absolute bottom-0 end-0  rounded px-1 m-2 ico-pages" >64</span>
                      <!-- <img class="slide-img"  src="http://localhost/fileRougeMangaBest/Views/asset/image/manga.png" alt=""> -->
                      <div class="slide-info">
                          <h4 class=" d-block   demo"> <?php echo $manga['title']; ?> </h4>
                        <p class='m-0' style='font-size: 13px;color: #adadad;' ><?php echo $manga['sous-title']; ?></p>

                          <p class="m-0" style="font-size: 13px;color: #adadad;" > <?php echo $manga['date']; ?> </p>
                          
                      </div>
                      <!-- href="http://localhost/fileRougeMangaBest/Manga/read/<?php echo $data[0]['id']; ?>" -->
                      <div class="slide-image" style="background-image: url(<?php echo $image; ?>);">
                      </div>
                    </a>
                  </div>
                </div>

           </div>
           
           <?php } ?>
          </div>
<!--------------------------------------------------------------- end content -->

<!--------------------------------------------------------------- side bar -->

<!-- side bar ithem -->

  

  
      
    </div>
<!--------------------------------------------------------------- end side bar -->


      </div>
<!----------------------------------------------------------------- end content ----------------------------------------------------------------->

<!-- button top -->
<a href="#Top"><img class="btnTop position-fixed bottom-0 end-0 m-4 p-2 rounded-circle " src="http://localhost/fileRougeMangaBest/Views/asset/image/icon/toTop.png" alt="to Top"></a>
<!-- end button top -->

<!-- Footer -->
<footer class="" style="background-color: #383943;color: #9E9E9E;">
<!-- nav Footer -->
<?php include './includs/footer.php';?>
<!-- Footer -->

    </div>
  </div>
</div>




<script src="http://localhost/fileRougeMangaBest/Views/asset/js/bootstrap.min.js"></script>
    <script src="http://localhost/fileRougeMangaBest/Views/asset/js/jquery.min.js"></script>


    
    <script>
      // btn top
      $(window).on('scroll', function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > 200) {
          $('.btnTop').stop().animate({opacity: "1",transition: "0.5s"},200);
      }
      else {
          $('.btnTop').stop().animate({opacity: "0",transition: "0.5s"},200);
      }
  });


      // carousel
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