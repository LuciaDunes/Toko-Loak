 @extends('layouts.app')
 @section('content')
     <!-- Modal -->
     <div class="modal fade bg-white" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
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

     <section class="bg-light">
         <div class="container pb-5">
                 <div class="row">
                     <div class="col-lg-5 mt-5">
                         <div class="card mb-3">
                             <img class="card-img img-fluid" src="{{ $datas->image }}" alt="Card image cap"
                                 id="product-detail">
                         </div>
                     </div>
                     <!-- col end -->
                     <div class="col-lg-7 mt-5">
                         <div class="card">
                             <div class="card-body">
                                 <h1 class="h2">{{ $datas->name }}</h1>
                                 <p class="h3 py-2">Rp {{ $datas->price }}</p>
                                 <ul class="list-inline">
                                     <li class="list-inline-item">
                                         <h6>terjual {{$datas->sold}} pcs</h6>
                                     </li>
                                     <li class="list-inline-item">
                                         <p class="text-muted"><strong>{{ $datas->category }}</strong></p>
                                     </li>
                                 </ul>

                                 <h6>Description:</h6>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt
                                     ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum
                                     convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                                 <form action="" method="POST">
                                     <input type="hidden" name="id_barang" value="{{$datas->id}}">
                                     <div class="row">
                                         <div class="col-auto">
                                             <ul class="list-inline pb-3">
                                                 <li class="list date m-1 pb-1">
                                                     Total barang
                                                     <input class="form-control" type="number" name="total">
                                                 </li>
                                                 <li class="list date m-1 pb-1">
                                                    Stok barang {{$datas->stock}}
                                                </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="row pb-3">
                                         <div class="col ">
                                             <button type="submit" class="btn btn-success btn-lg" name="rent"
                                                 value="rent">Beli  </button>
                                         </div>
                                     </div>
                                 </form>

                             </div>
                         </div>
                     </div>
         </div>
         </div>
     </section>
 @endsection
