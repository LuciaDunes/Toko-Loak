<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barang(){
        $data = Barang::all();
        $no = 1;

        return view('barang', ['datas' => $data, 'no' => $no]);
    }
}
