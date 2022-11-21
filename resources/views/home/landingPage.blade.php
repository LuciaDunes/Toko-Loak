@extends('layouts.app')

@section('content')
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset("storage/Dash1.png")}}"  alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset("storage/Dash3.png")}}"  alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset("storage/Dash1.png")}}"  alt="Third slide">
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
  </header>
  <!-- categories -->
  <section class="container py-5">
    <div class="row justify-content-center px-4 my-3">
      <form class="form-inline my-2 my-lg-0 pr-4">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <div class="row text-center pt-3">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Categories</h1>
        <p>

        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-4 p-5 mt-3">
        <a href="Catalog.php?kategori=kamera"><img src="{{asset("storage/LOA.png")}}" class="rounded-circle img-fluid border"></a>
        <h2 class="text-center mt-3 mb-3">Camera</h2>
      </div>
      <div class="col-12 col-md-4 p-5 mt-3">
        <a href="Catalog.php?kategori=lensa"><img src="{{asset("storage/LOA.png")}}" class="rounded-circle img-fluid border"></a>
        <h2 class="text-center mt-3 mb-3">Lens</h2>
      </div>
      <div class="col-12 col-md-4 p-5 mt-3">
        <a href="Catalog.php?kategori=aksessoris"><img src="{{asset("storage/LOA.png")}}" class="rounded-circle img-fluid border"></a>
        <h2 class="text-center mt-3 mb-3">Accessories</h2>
      </div>
    </div>
  </section>
  @endsection