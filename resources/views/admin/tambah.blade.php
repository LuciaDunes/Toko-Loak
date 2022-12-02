<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <style>
        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <a href="{{ route('home') }}" class="text-decoration-none">
            <h2>Tambah Barang</h2>
        </a>

        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="namaBarang" class="col-sm-2 col-form-label col-form-label-lg">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="namaBarang" name="name"
                        placeholder="Nama Barang">
                </div>
            </div>
            <div class="form-group row">
                <label for="category" class="col-sm-2 col-form-label col-form-label-lg">kategori</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="category" name="category"
                        placeholder="category">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="photo"
                    class="col-sm-2 col-form-label col-form-label-lg {{ $errors->has('photo') ? 'is-invalid' : '' }}">Foto
                </label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="image" name="photo"
                        accept="image/png, image/jpg, image/jpeg" required>

                    @error('photo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="col-md-12 my-2">
                        <img id="preview-image-before-upload" src="{{ asset('/img/broken-1.png') }}" alt="preview image"
                            style="max-height: 250px;">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label col-form-label-lg">Harga</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-lg" id="harga" name="price"
                        placeholder="price">
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-sm-2 col-form-label col-form-label-lg">Stok</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-lg" id="stok" name="stock"
                        placeholder="Stok">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="hidden" value="0" class="form-control form-control-lg" id="sold"
                        name="sold" placeholder="Sold">
                </div>
            </div>

            <input type="submit" value="simpan" class="btn btn-primary">
        </enctype=>
    </div>
    <script src="{{ asset('jquery-3.5.1.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#image').change(function() {
                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
</body>

</html>
