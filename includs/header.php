<style>
  .navbar-toggler{
    position: absolute;
    right: 20;
    top: 15;
  }
</style>


<header>

  <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #0F1128;">
    <div class="container-lg">
      <a class="navbar-brand" href="http://localhost/fileRougeMangaBest/User/index"><img src="http://localhost/fileRougeMangaBest/Views/asset/image/tori  mangaa.png" alt="manga4all" height="40px"></a>
      <div class="d-none d-lg-flex w-100" id="showNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item mx-1">
            <a class="nav-link " href="http://localhost/fileRougeMangaBest/User/index">Home</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link " href="http://localhost/fileRougeMangaBest/Manga/genres">Genres</a>
          </li>
          <li class="nav-item mx-1">
            <?php if (isset($_SESSION["admin"]) && $_SESSION["admin"] == 1) { ?>
              <a class="nav-link activeNav" href="http://localhost/fileRougeMangaBest/Manga/index">New</a>
            <?php } ?>
          </li>
        </ul>
        <div class="d-flex align-items-start">
          <form class="d-flex mx-0 mx-sm-3 nav-item mx-1 my-auto" action="index" method="post">
            <input name="search" class=" form-control-expand form border border-input-color border-end-0 bg-transparent px-3" style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;outline: none;" type="search" placeholder="Search" aria-label="Search">
            <button name="submit_search" class="btn btn-outline border border-input-color border-start-0 text-white" type="submit" style="border-top-right-radius: 50px;border-bottom-right-radius: 50px;"><i class="fas fa-search"></i></button>
          </form>
          <?php if (!isset($_SESSION["user"]) && empty($_SESSION["user"])) { ?>
            <a href="http://localhost/fileRougeMangaBest/User/userSignUp" class=" nav-item mx-1 btn text-white px-3 my-auto" style="margin-right:10px;"><i class="fa-solid fa-user-plus"></i></a>
            <a href="http://localhost/fileRougeMangaBest/User/userLogin" class=" nav-item mx-1 btn  text-white px-3 my-auto" style="border-radius: 30px;"> login</a>
          <?php } ?>
          <?php if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) { ?>
            <a href="http://localhost/fileRougeMangaBest/User/logout" class="nav-item mx-1  text-white px-3 my-auto" style=""> <i class="fas fa-arrow-right-from-bracket fa-lg"></i></a>
            <a href="http://localhost/fileRougeMangaBest/User/profile" class="nav-item mx-1 btn text-white px-3 my-auto" style="border-radius: 50px;"> <i class="fa-solid fa-user"></i></a>
          <?php } ?>
        </div>
      </div>
      <button class="navbar-toggler" type="button" onclick="showMenu()">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
</header>



<script>
  const showMenu = () => {
    const showNav = document.getElementById('showNav');
    showNav.classList.toggle('d-none');
  }
</script>