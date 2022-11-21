<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function landingPage(){
        $data = Item::all();
        $no = 1;

        return view('landingPage', ['datas' => $data, 'no' => $no]);
    }
    public function showItems(){
        $data = Item::all();
        $no = 1;

        return view('barang', ['datas' => $data, 'no' => $no]);
    }
    public function catalog(){
        $data = Item::all();
        $no = 1;

        return view('catalog', ['datas' => $data, 'no' => $no]);
    }
    public function single(){
        $data = Item::all();
        $no = 1;

        return view('single-catalog', ['datas' => $data, 'no' => $no]);
    }

    public function add() {
        return view('tambah');
    }

    public function store(Request $request) {
        $data = [
            'name' => $request->name,
            'image' => $request->image,
            'price' => $request->price,
            'stock' => $request->stock,
            0 => $request->sold
        ];

        Item::create($data);

        return redirect()->route('home')->with('status', 'success');
    }
 
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Item::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect()->back();
	}

  
}
