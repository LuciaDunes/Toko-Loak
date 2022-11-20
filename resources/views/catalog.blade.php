<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TokoLoak</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/catalog.js','resources/js/bootatrap.js']) --}}
</head>

<body>

    <body>
        {{-- header --}}
        <div class="container">
            <div class="row justify-content-center pt-4 pb-2">
                <img src="{{asset("storage/LOA.png")}}" height="100px" alt="icon">
            </div>
            <div class="row justify-content-center pb-2">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Daftar Harga
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="catalog.php?merk=sony">sony</a>
                            <a class="dropdown-item text-dark" href="catalog.php?merk=fuji">fuji</a>
                            <a class="dropdown-item text-dark" href="catalog.php?merk=nikon">nikon</a>
                            <a class="dropdown-item text-dark" href="catalog.php?merk=canon">canon</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-dark" href="catalog.php?kategori=aksessoris">aksessoris</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade bg-white" id="search" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="w-100 pt-1 mb-5 text-right">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="get" class="modal-content modal-body border-0 p-0">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="inputModalSearch" name="q"
                            placeholder="Search ...">
                        <button type="submit" class="input-group-text bg-success text-light">
                            <i class="fa fa-fw fa-search text-white"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>



        <!-- Start Content -->
        <div class="container py-5">
            <div class="row">
                <div class="col-md">
                    <div class="row">
                        @foreach ($datas as $item)
                            <div class="col-md-4">
                                <div class="card mb-4 product-wap rounded-5">
                                    <div class="card rounded-5">
                                        <img class="card-img rounded-0 img-fluid" src="{{ $item->image }}">
                                        <div
                                            class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                            <ul class="list-unstyled">
                                                <li><a class="btn btn-primary text-white mt-2"
                                                        href="rent-single.php?id=2&kategori=3"><i
                                                            class="fa far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="" class="h3 text-decoration-none">{{ $item->name }}</a>
                                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                            <li>{{ $item->category }}</li>
                                        </ul>
                                        <p class="text-center mb-0 mt-2">Rp {{ $item->price }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
        <!-- js -->
        <!-- <script src="assets/js/jquery-1.11.0.min.js" defer></script> -->
        <!-- <script src="assets/js/jquery-migrate-1.2.1.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <!-- <script src="assets/js/custom.js"></script> -->

    </body>

</html>
