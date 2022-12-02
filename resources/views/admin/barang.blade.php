@extends('layouts.app-admin')

@section('content')
            <main role="main" class=" pt-3 px-4">
                <div class="container-fluid">
                    <div class="row p-5">
                        <h2>Data Barang</h2>

                        @if (session('status'))
                            <div class="alert alert-{{ session('status') }}" role="alert">
                                <strong>Selamat!</strong> Data berhasil di tambahkan
                            </div>
                        @endif

                        <a href="{{ route('add') }}" class="btn btn-primary mx-5">Tambah</a>
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
                                        <th><img src="{{ asset('/storage/'.$item->image) }}" style="width: 100px"></th>
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
@endsection