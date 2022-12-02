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
        $datas   = Item::findOrFail($data);
        $datas->delete();

        return redirect()->route('showItems')->with('success', 'Data Berhasil Dihapus');
    }

    public function edit($id){
        $data=Item::find($id);
        return view ('admin.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data = Item::find($id);
        $data->update($request->all());
        return redirect()->route('showItems')->with('status', 'success');
    }

}
