@extends('layouts.app-admin')

@section('content')
    <main role="main" class=" pt-3 px-4">
        <div class="container-fluid">
            <div class="row p-5">
                <h2>Data Transaction</h2>

                @if (session('status'))
                    <div class="alert alert-{{ session('status') }}" role="alert">
                        <strong>Selamat!</strong> Data berhasil di tambahkan
                    </div>
                @endif
                <table class="table table-hover" border="1" cellpadding='10'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pembeli</th>
                            <th>Barang</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $item)
                        <tr>
                                <th>{{ $no++ }}</th>
                                <th>{{ $item->user->name }}</th>
                                <th>{{ $item->item->name }}</th>
                                <th>{{ $item->date }}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </main>
    </div>
    </div>
@endsection
