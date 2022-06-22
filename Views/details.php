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
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/details.css ">
<!-- caoussel -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/theme.css">
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/caoussel.min.css">
<!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Details</title>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">

            <!-- navBar -->
            <?php include './includs/header.php';?>

      <!-- end navBar -->

<!-----------------------------------------------------------------  header ----------------------------------------------------------------->
   <div class="">

        <div class=" col-12 position-relative" >
            <div class="divCoverBack position-absolute">
                <img src="http://localhost/fileRougeMangaBest/Views/asset/image/2020_08_18_15977321135694.jpg" class="coverBack"  style="filter: blur(40px);" alt="">
            </div>
          <div class="py-0 py-md-4" >
             
            <div class="row justify-content-center m-0 p-2">
                <!-- cover -->
                <div class="col-12 col-md-5 divCover mx-0 mx-md-3 p-0 rounded">
                  
                  <img src="http://localhost/fileRougeMangaBest/Views/asset/image/Chapter1/<?=$data[0]['image']?>" class="cover"  class="rounded" alt="">
                </div>
              <!-- end cover -->
              <!-- details -->
            
                <div class="col-12 col-md-6 text-light my-3 my-md-0 mx-2 mx-md-0">
                    <H1 class="fs-3 mb-3 text-shadow"><?php echo $data[0]['title']?></H1>
                    <p class="my-1 text-shadow"><?php echo $data[0]['title']?></p>
                    <div class="fs-5 text-shadow">
                        <i class="fas fa-crown text-warning"></i>
                        <strong class=" text-warning ">RANK 234 </strong>
                        <i class="fa fa-star" id="1" onmouseover="startRating(this)"></i>
                        <i class="fa fa-star" id="2" onmouseover="startRating(this)"></i>
                        <i class="fa fa-star" id="3" onmouseover="startRating(this)"></i>
                        <i class="fa fa-star" id="4" onmouseover="startRating(this)"></i>
                        <i class="fa fa-star" id="5" onmouseover="startRating(this)"></i>
                        5.0
                    </div>
                    <div class="row row-cols-md-auto my-4">
                        <div class="col border-end">
                            <p class="mb-1 text-shadow">Chapters</p>
                            <strong class="fs-5 fw-normal text-shadow" ><i class="fas fa-book-open text-warning"></i>  <?php echo $_SESSION['last']?>  </strong>
                        </div>
                        <div class="col border-end">
                            <p class="mb-1 text-shadow">Views</p>
                            <strong class="fs-5 fw-normal text-shadow"><i class="fas fa-eye text-warning"></i> 3.54M </strong>
                        </div>
                        <div class="col border-end">
                            <p class="mb-1 text-shadow">Bookmarked</p>
                            <strong class="fs-5 fw-normal text-shadow"><i class="fas fa-bookmark text-warning"></i> 1705 </strong>
                        </div>
                        <div class="col">
                            <p class="mb-1 text-shadow">Status</p>
                            <strong class="fs-5 fw-bold text-warning text-shadow"><?php echo $data[0]['status']?></strong>
                        </div>

                    </div>
                    <div class="my-3">
                        <p class="mb-1 text-shadow">Chapters</p>
                        <div class="my-2">
                            <span class=" rounded badge-categorie"><?php echo $data6[0]['type']?></span>
                        </div>
                    </div>

                    <p class="my-3 text-shadow">Last update : <br><?php echo $data[0]['date']?></p>

                    <div class="row mx-0">
                        <a href="http://localhost/fileRougeMangaBest/Manga/read/<?php echo $data[0]['id']; ?>" class="col-12 col-md-5 col-lg-4 btn btn-danger py-2 rounded-pill" style="background-color: #ff0004c0;border: 1px solid #cc7476;">
                            <sapn class="">READ - <small>CHAPTER 1</small></sapn>
                            
                        </a>
                        <a href="#" class="col-12 col-md-5 col-lg-4 mx-0 my-2 mx-md-2 my-md-0 btn btn-danger py-2 rounded-pill" style="background-color: #ff0004c0;border: 1px solid #cc7476;">
                            <sapn class=""><i class="fa fa-bell"></i> Add to Library</sapn>
                        </a>
                    </div>
                </div>
          
              
                <!-- details -->
            </div>


              <!-- START RATING ORANGE -->
            <script>
                function startRating(item) {
                    rate = item.id[0];
                    sessionStorage.star = rate;
                    for (var i = 0; i < 5; i++) {
                        if (i < rate) {
                            document.getElementById((i + 1)).style.color = "orange";
                        } else {
                            document.getElementById((i + 1)).style.color = "white";
                        }
                    }
                }
            </script>

          </div>
        </div>
</div>
<!----------------------------------------------------------------- end header ----------------------------------------------------------------->

<!-----------------------------------------------------------------  content ----------------------------------------------------------------->
 
<div class="container-lg ">
  <div class="p-md-5">
    <!-- about -->
    <div class="my-4">
      <h1>About</h1>
      <div class="alert alert-secondary" role="alert">
        A simple secondary alert check it out! A simple secondary alert check it out! A simple secondary alert check it out! A simple secondary alert check it out! A simple secondary alert check it out!
        A simple secondary alert check it out! A simple secondary alert check it out! A simple secondary alert check it out! A simple secondary alert check it out! A simple secondary alert check it out!
      </div>
    </div>
    <!-- end about -->
    <!-- end summary -->
    <div class="my-4">
      <h3>Summary</h3>

      <div style="white-space: pre-line;">
        
        Zhang Xuan traverses into a foreign world and becomes an honorable teacher. A mysterious library appears in his mind. As long as it is something he has seen, regardless of whether it is a human or an object, a book on its weakness would be automatically compiled. Thus, he became formidable.
        
        “Emperor Haotian, why don’t you like to wear underwear? To think that you’re still an emperor, can you pay more attention to your image?”
        
        “Fairy Linglong, if you continue to suffer from insomnia, you can always look for me. I have a way with lullabies!”
        
        “You as well, Qiankun Demon Lord, can you cut down on the garlic? Do you want to stink me to death?”
        
      </div>
      <!-- <img src="../asset/image/discussion.png" alt="logo"> -->
    </div>
    <!-- end summary -->

<!-- chapter -->

<div class="my-4">
  <h3>Chapters</h3>
  <div class="border-bottom  row">
    <form class="col-12 col-sm-6 d-flex py-2 mx-0 justify-content-center justify-content-sm-start">
      <input class=" form-control-expand form border border-end-0 bg-transparent px-3" style="outline: none;"  type="search" placeholder="Enter Chapter No" aria-label="Search">
      <button class="btn btn-outline border rounded-0  text-white" type="submit" ><i class="fas fa-search text-dark"></i></button>
    </form>
    
      <nav class="col-12 col-sm-6 py-2">
        <ul class="pagination justify-content-center justify-content-sm-end   my-0">
          <li class="page-item">
            <a class="page-link rounded-0" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link rounded-0" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    
  </div>
  <div class="chapters">
    
    <ul class="row px-3">

      <li class="col-12 col-sm-6">
        <a href="read.php" class="row">
          <span class="col-1 p-0">12</span>
          <span class="col">Swindler <br><time class="time">yestreday</time> </span>
        </a>
      </li>
      <li class="col-12 col-sm-6">
        <a href="read.php" class="row">
          <span class="col-1 p-0">12</span>
          <span class="col">Swindler <br><time class="time">yestreday</time> </span>
        </a>
      </li>
      <li class="col-12 col-sm-6">
        <a href="read.php" class="row">
          <span class="col-1 p-0">12</span>
          <span class="col">Swindler <br><time class="time">yestreday</time> </span>
        </a>
      </li>
      <li class="col-12 col-sm-6">
        <a href="read.php" class="row">
          <span class="col-1 p-0">12</span>
          <span class="col">Swindler <br><time class="time">yestreday</time> </span>
        </a>
      </li>
      <li class="col-12 col-sm-6">
        <a href="read.php" class="row">
          <span class="col-1 p-0">12</span>
          <span class="col">Swindler <br><time class="time">yestreday</time> </span>
        </a>
      </li>
      <li class="col-12 col-sm-6">
        <a href="read.php" class="row">
          <span class="col-1 p-0">12</span>
          <span class="col">Swindler <br><time class="time">yestreday</time> </span>
        </a>
      </li>
      <li class="col-12 col-sm-6">
        <a href="read.php" class="row">
          <span class="col-1 p-0">12</span>
          <span class="col">Swindler <br><time class="time">yestreday</time> </span>
        </a>
      </li>
      <li class="col-12 col-sm-6">
        <a href="read.php" class="row">
          <span class="col-1 p-0">12</span>
          <span class="col">Swindler <br><time class="time">yestreday</time> </span>
        </a>
      </li>

    </ul>
  </div>
</div>

    

<!-- end chapter -->


    <!-- tags -->
    <div class="my-4">
      <h3>Tags</h3>
      <div class="tags">
        <ul class="d-flex p-0" style="flex-wrap: wrap;">
          <li><a href="">Alchemy</a></li>
          <li><a href="">Alchemy Alchemy</a></li>
          <li><a href="">Alchem</a></li>
          <li><a href="">Alchemy</a></li>
          <li><a href="">Alchemy</a></li>
          <li><a href="">Alch</a></li>
          <li><a href="">Alchemy</a></li>
          <li><a href="">Al</a></li>
          <li><a href="">Alchemy</a></li>
        </ul>
      </div>
    </div>
    <!-- tags -->
  </div>
</div>
<!----------------------------------------------------------------- end content ----------------------------------------------------------------->



<!-- button top -->
<a href="#Top"><img class="btnTop position-fixed bottom-0 end-0 m-4 p-2 rounded-circle " src="http://localhost/fileRougeMangaBest/Views/asset/image/icon/toTop.png" alt="to Top"></a>
<!-- end button top -->

<!-- Footer -->
<?php include './includs/footer.php';?>
<!-- Footer -->

    </div>
  </div>
</div>




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



    </script>
    <script src="http://localhost/fileRougeMangaBest/Views/asset/dist/owl.carousel.js"></script>

    
</body>
</html>