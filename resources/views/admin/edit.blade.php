@extends('layouts.app-admin')

@section('content')
    
    <div class="container">
        <a href="{{ route('home') }}" class="text-decoration-none">
            <h2>Edit Barang</h2>
        </a>

        <form action="{{ route('update') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="namaBarang" class="col-sm-2 col-form-label col-form-label-lg">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" value={{$data->name}} class="form-control form-control-lg" id="namaBarang" name="name" placeholder="Nama Barang">
                </div>
            </div>
            <div class="form-group row">
                <label for="category" class="col-sm-2 col-form-label col-form-label-lg">kategori</label>
                <div class="col-sm-10">
                    <input type="text" value={{$data->category}} class="form-control form-control-lg" id="category" name="category" placeholder="category">
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label col-form-label-lg">Image</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->Image}}" class="form-control form-control-lg" id="image" name="image" placeholder="image">
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label col-form-label-lg">Harga</label>
                <div class="col-sm-10">
                    <input type="number" value={{$data->price}}  class="form-control form-control-lg" id="harga" name="price" placeholder="Stok">
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-sm-2 col-form-label col-form-label-lg">Stok</label>
                <div class="col-sm-10">
                    <input type="number" value={{$data->stock}} class="form-control form-control-lg" id="stok" name="stock" placeholder="Stok">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="hidden" value={{$data->sold}} class="form-control form-control-lg" id="sold" name="sold" placeholder="Sold">
                </div>
            </div>
                
            <input type="submit" value="simpan" class="btn btn-primary">
        </form>
    </div>
@endsection
