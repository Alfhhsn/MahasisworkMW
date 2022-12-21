<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/search.css">
  </head>
  <body>
    
    <header>
        <nav class="navbar fixed-top navbar-expand-lg bg-transparent">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Mahasis<span class="pink">Work</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle categories" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Mentor Course</a></li>
                    <li><a class="dropdown-item" href="#">Graphic Design</a></li>
                    <li><a class="dropdown-item" href="#">Translation</a></li>
                    <li><a class="dropdown-item" href="#">Writing</a></li>
                    <li><a class="dropdown-item" href="#">Photo Editing</a></li>
                    <li><a class="dropdown-item" href="#">Video Editing</a></li>
                    <li><a class="dropdown-item" href="#">Programming & Tech</a></li>
                    <li><a class="dropdown-item" href="#">Data</a></li>
                  </ul>
                </li>
                <li class="nav-item profile">
                  <a class="nav-link" href="#">Profile</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Ingin cari jasa apa hari ini?" aria-label="Search" style="width: 400px;">
                <button class="btn btn-primary" style="background-color: #022E57;" type="submit"><img src="img/search.svg" alt=""></button>
              </form>
            </div>
          </div>
        </nav>
      </header>

      <section class="best">
        <div class="container-fluid">
          <h1 class="title">20 Mahasiswa Menjadi Graphic Desainer</h1>
          <div class="row">
            <div class="col-4">
              <div class="card text-bg-transparent bg-transparent">
                <img src="img/ningning.png" class="card-img" alt="">
                <div class="card-img-overlay name">
                  <h5 class="card-title"><a href="">Ningning</a></h5>
                </div>
                <div class="classification">
                  <p class="rate"><img src="img/star.svg" alt="">5 <span class="ulasan">(15 ulasan)</span></p>
                  <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos perferendis cupiditate culpa provident iste reiciendis obcaecati repellat? Assumenda, magni ab!</p>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card text-bg-transparent bg-transparent">
                <img src="img/yangyang.png" class="card-img" alt="">
                <div class="card-img-overlay name">
                  <h5 class="card-title"><a href="">Yangyang</a></h5>
                </div>
                <div class="classification">
                  <p class="rate"><img src="img/star.svg" alt="">4.6 <span class="ulasan">(10 ulasan)</span></p>
                  <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos perferendis cupiditate culpa provident iste reiciendis obcaecati repellat? Assumenda, magni ab!</p>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card text-bg-transparent bg-transparent">
                <img src="img/mark.png" class="card-img" alt="">
                <div class="card-img-overlay name">
                  <h5 class="card-title"><a href="">Mark</a></h5>
                </div>
                <div class="classification">
                  <p class="rate"><img src="img/star.svg" alt="">4 <span class="ulasan">(10 ulasan)</span></p>
                  <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos perferendis cupiditate culpa provident iste reiciendis obcaecati repellat? Assumenda, magni ab!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer>
        <div class="container-fluid">
          <div class="row upper">
            <div class="col">
              <h1 class="title">MahasisWork</h1> <br>
              <img src="img/instagram.svg" alt="">
              <img src="img/twitter.svg" alt="">
            </div>
            <div class="col">
              <h1 class="title">Categories</h1>
              <ul>
                <li><a href="">Mentor Course</a></li>
                <li><a href="">Graphic Design</a></li>
                <li><a href="">Translation</a></li>
                <li><a href="">Writing</a></li>
                <li><a href="">Photo Editing</a></li>
                <li><a href="">Video Editing</a></li>
                <li><a href="">Programming & Tech</a></li>
                <li><a href="">Data</a></li>
              </ul>
            </div>
            <div class="col">
              <h1 class="title">Community</h1>
              <ul>
                <li><a href="">Blog</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">Forums</a></li>
                <li><a href="">Invite Friends</a></li>
              </ul>
            </div>
            <div class="col">
              <h1 class="title">Support</h1>
              <ul>
                <li><a href="">Help & Support</a></li>
              </ul>
            </div>
          </div>
          <div class="row lower">
            <h3 class="title">Copyright <span class="bold">MahasisWork</span> 2022</h3>
          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>