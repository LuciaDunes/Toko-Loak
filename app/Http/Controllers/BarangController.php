<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function home(){
        $data = Barang::all();
        $no = 1;

        return view('barang', ['datas' => $data, 'no' => $no]);
    }

    public function add() {
        return view('tambah');
    }

    public function store(Request $request) {
        $data = [
            'namaBar' => $request->namaBar,
            'harga' => $request->harga,
            'stok' => $request->stok
        ];

        Barang::create($data);

        return redirect()->route('home')->with('status', 'success');
    }
}
