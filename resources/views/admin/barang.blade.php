<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    <!-- bootstrap -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>

<body>
    @include('layouts.headerAdmin')
            <main role="main" class=" pt-3 px-4">
                <div class="container-fluid">
                    <div class="row p-5">
                        <h2>Data Barang</h2>

                        @if (session('status'))
                            <div class="alert alert-{{ session('status') }}" role="alert">
                                <strong>Selamat!</strong> Data berhasil di tambahkan
                            </div>
                        @endif

                        <a href="{{ route('add') }}" class="btn btn-primary mx-5">(+) Tambah</a>
                        <table class="table table-hover mt-3" border="1" cellpadding='10'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>foto</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Terjual</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($datas as $item)
                                        <th>{{ $no++ }}</th>
                                        <th>{{ $item->name }}</th>
                                        <th><a href="{{ $item->image }}">{{ $item->image }}</a></th>
                                        <th>{{ $item->category }}</th>
                                        <th>Rp {{ number_format($item->price) }}</th>
                                        <th>{{ $item->stock }}</th>
                                        <th>{{ $item->sold }}</th>
                                        <th ><a href="{{ route('edit', ['data' => $item]) }}" class="btn btn-warning ">Edit</a>
                                            <form action="{{ route('delete', ['data' => $item]) }}" method="post">
                                                @csrf
                                                <input class="btn btn-danger" type="submit" value="delete">
                                            </form>
                                           </th>
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </main>
        </div>
    </div>
</body>

</html>
