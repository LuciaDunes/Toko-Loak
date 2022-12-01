<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function landingPage(){
        $data = Item::all();
        $no = 1;

        return view('home.landingPage', ['datas' => $data, 'no' => $no]);
    }
    public function showItems(){
        $data = Item::all();
        $no = 1;

        return view('admin.barang', ['datas' => $data, 'no' => $no]);
    }
    public function catalog(){
        $data = Item::all();
        $no = 1;

        return view('home.catalog', ['datas' => $data, 'no' => $no]);
    }
 

    public function add() {
        return view('admin.tambah');
    }

    public function store(Request $request) {
        $data = [
            'name' => $request->name,
            'category' => $request->category,
            'image' => $request->image,
            'price' => $request->price,
            'stock' => $request->stock,
            'sold' => $request->sold,
        ];

        Item::create($data);

        return redirect()->route('home')->with('status', 'success');
    }
    
    public function delete($data) {
        $finalproject   = Item::findOrFail($data);
        $finalproject->delete();

        return redirect()->route('admin.barang')->with('success', 'Data Berhasil Dihapus');
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

    public function edit($id){
        $data=Item::find($id);
        return view ('admin.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data = Item::find($id);
        $data->update($request->all());
        return redirect()->route('barang')->with('status', 'success');
    }

}
