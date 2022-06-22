<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/bootstrap.min.css">
  <!-- font awesom -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/profile.css">



  <!-- style -->
  <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/navbar.css">
  <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/details.css ">

  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>Profile</title>
</head>

<body style="margin: 0;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-0">
        <?php include './includs/header.php'; ?>


        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
              <!-- Section Heading-->
              <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3>Profile</h3>

                <div class="line"></div>
              </div>
            </div>
          </div>

          <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==1){ ?>
          <div class="row">
            <?php foreach($data as $row): ?>
            <!-- Single Advisor-->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                  <!-- Social Info-->
                  <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                  <h6><?php echo $row[2]; ?></h6>
                  <p class="designation"><?php echo $data[0][4]; ?></p>
                </div>
              </div>
            </div>

            <?php endforeach; ?>
          </div>
          <?php }else {?>
            <div class="row" style="justify-content: center;">
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                  <!-- Social Info-->
                  <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                  <h6><?php echo $data[0][2]; ?></h6>
                  <p class="designation"><?php echo $data[0][4]; ?></p>
                </div>
              </div>
            </div>
            </div>

          <?php }?>
        </div>
      </div>
      <?php include './includs/footer.php'; ?>


      <script src="http://localhost/fileRougeMangaBest/Views/asset/js/bootstrap.min.js"></script>
      <script src="http://localhost/fileRougeMangaBest/Views/asset/js/jquery.min.js"></script>



      <script>
        // btn top
        $(window).on('scroll', function() {
          var scrollTop = $(window).scrollTop();
          if (scrollTop > 200) {
            $('.btnTop').stop().animate({
              opacity: "1",
              transition: "0.5s"
            }, 200);
          } else {
            $('.btnTop').stop().animate({
              opacity: "0",
              transition: "0.5s"
            }, 200);
          }
        });


        // carousel
        $(document).ready(function() {
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

            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
          });


        })
      </script>
      <script src="http://localhost/fileRougeMangaBest/Views/asset/dist/owl.carousel.js"></script>








</body>

</html>