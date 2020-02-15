  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="styles/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>@yield('title')</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
       
        <button type="button" class="btn btn-outline-primary mx-md-2">HOME</button>
        <button type="button" class="btn btn-outline-warning mx-md-2">PRODUCT</button>
        <button type="button" class="btn btn-outline-danger mx-md-2">CONTACT US</button>
        <button type="button" class="btn btn-outline-secondary mx-md-2">ABOUT US</button>
        
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
        
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto"></ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </div>
      </nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/SOCO11.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/SOCO22.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/SOCO333.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>


<div class="container">
  <div style="background-color: #ffbaba" width="60%" height="60%">
  <h1 class="text-center" mt-3 mb-3>New Product!</h1>
  </div>
</div>


<div class="container">
<div class="row justify-content-center">
<div class="card-deck" width: 15rem;>
  <div class="card text-center">
    <img src="..\img\sk2-4.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">SK-II Facial Treatment Mask</h5>
      <p class="card-text">Rp 245.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>

      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>

      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SK-II Facial Treatment Mask</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>

        </button>
      </div>
      <div class="modal-body">
        Rp 245.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
      </div>
    </div>
  </div>
</div>
      
    </div>
  </div>


  <div class="card">
    <img src="..\img\sk2-2.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">SK-II Facial Treatment Cleanser</h5>
      <p class="card-text">Rp 862.500</p>
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>

      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal4">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>

<!-- Modal -->
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel1">SK-II Facial Treatment Cleanser</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Rp 862.500
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>

  
  <div class="card">
    <img src="..\img\sk2-3.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">SK-II Facial Treatment Gentle Cleansing Cream</h5>
      <p class="card-text">Rp 990.000</p>
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      <div class="bintang mt-4"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>

<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">SK-II Facial Treatment Gentle Cleansing Cream</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          
        </button>
      </div>
      <div class="modal-body">
        Rp 990.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Add To Bag</button>
        <button type="button" class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="card">
    <img src="..\img\sk2-6.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">SK-II Atmosphere CC Cream</h5>
      <p class="card-text">Rp 245.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
      
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal6">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>
<br>



<!-- Modal -->
<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SK-II Atmosphere CC Cream</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Rp 245.000
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>

  <div class="card">
    <img src="..\img\sk2-8.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">SK-II Facial Treatment Cleansing Oil</h5>
      <p class="card-text">Rp 872.500
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal7">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>



<!-- Modal -->
<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SK-II Facial Treatment Cleansing Oil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Rp 872.500
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-buy" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>

<br><br>
  <div class="container">
  <div style="background-color: #ffbaba" width="60%" height="60%">
  <h1 class="text-center mt-3 mb-3">Product Discount!</h1>
  </div>
</div>


<!--PRODUCT BARIS DISKON SIS-->
  
<div class="card">
    <img src="..\img\cosrx1.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">COSRX Low pH Good Morning Cleanser</h5>
      <p class="card-text">Rp  149.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
      
      <!-- Button trigger modal -->
      <center>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal12">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>
</center>


<!-- Modal -->
<div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">COSRX Low pH Good Morning Cleanser</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Rp 149.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>

<div class="card">
    <img src="..\img\cosrx3.JPG" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">COSRX Acne Pimple Master Patch</h5>
      <p class="card-text">Rp 55.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal8">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>



<!-- Modal -->
<div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">COSRX Acne Pimple Master Patch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Rp 55.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>

<div class="card">
    <img src="..\img\cosrx2.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">COSRX Advanced Snail Mucin 96 Power Essence</h5>
      <p class="card-text">Rp 265.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal9">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>



<!-- Modal -->
<div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">COSRX Advanced Snail Mucin 96 Power Essence</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Rp 265.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>

<div class="card">
    <img src="..\img\cosrx4.JPG" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">COSRX Sunny Snail Tone Up Cream</h5>
      <p class="card-text">Rp 269.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal10">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>



<!-- Modal -->
<div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">COSRX Sunny Snail Tone Up Cream</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Rp 269.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>


<div class="card">
    <img src="..\img\cosrx6.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">COSRX Hydrogel Very Simple Pack</h5>
      <p class="card-text">Rp 340.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal11">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>



<!-- Modal -->
<div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">COSRX Hydrogel Very Simple Pack</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Rp 340.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>



<!--PRODUCT HOT SALE-->


<div class="container">
  <div style="background-color: #ffbaba" width="60%" height="60%">
  <h1 class="text-center mt-3 mb-3">HOT SALE!</h1>
  </div>
</div>

  
<div class="card">
    <img src="..\img\focallure1.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">FOCALLURE :<br> Silky Powder Ombre Blush</h5>
      <p class="card-text">Rp 176.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal15">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>



<!-- Modal -->
<div class="modal fade" id="modal15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Focallure Silky Powder Ombre Blush</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Rp 176.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>

<div class="card">
    <img src="..\img\focallure2.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">FOCALLURE : Beam Highlighter</h5>
      <p class="card-text">Rp 259.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal8">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>



<!-- Modal -->
<div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FOCALLURE : Beam Highlighter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Rp 259.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>

<div class="card">
    <img src="..\img\focallure3.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">FOCCALURE : <br>  Diamond Glow Highlighter</h5>
      <p class="card-text">Rp 265.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>

      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal17">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>



<!-- Modal -->
<div class="modal fade" id="modal17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FOCCALURE : <br>  Diamond Glow Highlighter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Rp 265.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>

<div class="card">
    <img src="..\img\focallure4.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">FOCALLURE : <br> 9 Color Eyeshadow</h5>
      <p class="card-text">Rp 119.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal18">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>



<!-- Modal -->
<div class="modal fade" id="modal18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FOCALLURE : <br> 9 Color Eyeshadow</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Rp 119.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>


<div class="card">
    <img src="..\img\focallure5.jpg" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">FOCALLURE : <br>  Loose Powder</h5>
      <p class="card-text">Rp 68.000
      <p class="card-text">
      <small class="text-muted">Last updated 3 mins ago</small></p>
      
      <div class="bintang mt-3"></div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
      
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal19">
  Buy
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">+</button>



<!-- Modal -->
<div class="modal fade" id="modal19" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FOCALLURE : <br>  Loose Powder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Rp 68.000
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Buy Now</button>
        <button type="button" class="btn btn-primary">Add To Bag</button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>

        <!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

<div style="background-color: #6351ce;">
  <div class="container">
    <div class="row py-4 d-flex align-items-center">

      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0">Get connected with us on social networks!</h6>
      </div>

    </div>
  </div>
</div>


<div class="container text-center text-md-left" style="background: #21243d; color: white;">
  <div class="row mt-0">

    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
      <h6 class="text-uppercase font-weight-bold">Name Products</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <ul>
        <li class="link">
          
        </li>
      </ul>
    </div>

    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
      <h6 class="text-uppercase font-weight-bold">Location</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>.</p>
    </div>
   
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
      <h6 class="text-uppercase font-weight-bold">About US</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
        consectetur
        adipisicing elit.</p>
    </div>
   
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
      <h6 class="text-uppercase font-weight-bold">Instagram</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="https://instragram.com/education/"> adindaleey</a>
      <p>
        <a href="https://instragram.com/education/"> vavle5</a>
      <p>
        <a href="https://instragram.com/education/"> zizah.0416</a>
    </div>

  </div>
</div>

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright</div>
<!-- Copyright -->

</footer>


      

    
    @yield('container')
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


  </body>
</html>