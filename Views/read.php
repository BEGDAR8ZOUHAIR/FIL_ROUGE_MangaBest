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
<!-- caoussel -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/theme.css">
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/caoussel.min.css">
<!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>New</title>
    <style>
      .img-fluid{
    
     width:100%;
        height: auto;
      
      }
      
    </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">

            <!-- navBar -->
            <?php include './includs/header.php';?>

      <!-- end navBar -->

      <!-- title -->
      <div class="" style="background-color: #202124;font-size: 18px;">
          <div class="container">
            <div class="text-center  p-3">
                <a href="details.php" class="text-light" style="text-decoration: none;">
              <?php echo $data1[0]['title'];?>
                    <span class="border-start" style="color: #888;padding-left: 14px;margin-left: 10px;">Chapter <?php echo $_SESSION['last']?> [END]</span>
                  </a>
              </div>
              <div>
                <div class="p-3 row">
                    <p class="col-4 text-start mt-4">
                          <a href="http://localhost/fileRougeMangaBest/Manga/read_chapitre/<?php 
                          echo $previouschapter;
                          ?>" class="btn text-light border-secondary px-3 "  style="text-decoration: none; display:<?php if(!empty($previouschapter)){ echo 'initial;';} else {echo 'none;';} ?>">
                              <i class="fas fa-chevron-left fs-4 position-relative" style="top: 3px;"></i>
                          </a>
                    </p>
                    <div class="col-4 text-center mt-4">
                        <select onchange="location = this.value;" onmousedown="this.size=3;"  name="" id="" class="form-control outline-none bg-transparent text-secondary">
                            <?php foreach ($allchapters as $chapitre) { ?>
                            <option <?php if($chapitre['id']==$data[0]['id_chapter']){echo "selected";} ?> value="http://localhost/fileRougeMangaBest/Manga/read_chapitre/<?php echo $chapitre['id']; ?>"><?php echo $chapitre['chapter'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <p class="col-4 text-end mt-4">
                          <a href="http://localhost/fileRougeMangaBest/Manga/read_chapitre/<?php if(isset($data[0]['id_chapter']))
                          {echo $data[0]['id_chapter']+1;}?>"  class="btn text-light border-secondary px-3 " style="text-decoration: none; display:<?php if($_SESSION['last']>=$data[0]['id_chapter']+1){ echo 'initial;';} else {echo 'none;';} ?>">
                              <i class="fas fa-chevron-right fs-4 position-relative" style="top: 3px;"></i>
                          </a>
                    </p>
                  </div>
              </div>
          </div>
      </div>
      <!-- end title -->

<!-- manga images -->

<?php foreach ($data as $manga) { ?>
<div class="manga-img">
    
  <img src="http://localhost/fileRougeMangaBest/Views/asset/image/Chapter1/<?php echo trim($manga['image']); ?>" class="img-fluid" alt="">
<?php } ?>

</div>



<!-- end manga images -->



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