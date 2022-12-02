<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use \Storage;

class ItemController extends Controller
{

    public function landingPage(){
        $data = Item::where('softdelete', 0)->get();
        $no = 1;

        return view('home.landingPage', ['datas' => $data, 'no' => $no]);
    }
    public function showItems(){
        $data = Item::where('softdelete', 0)->get();
        $no = 1;    

        return view('admin.barang', ['datas' => $data, 'no' => $no]);
    }
    public function catalog(){
        $data = Item::where('softdelete', 0)->get();
        $no = 1;

        return view('home.catalog', ['datas' => $data, 'no' => $no]);
    }
 

    public function add() {
        return view('admin.tambah');
    }

    public function store(Request $request) {
        $imageName = 'loak-' . $request->name . '-' . date('YmdHis');
        $imageExt = $request->file('photo')->extension();
        $imagePath = $request->file('photo')->storeAs('photo/barang', $imageName . '.' . $imageExt, 'public');
        $data = [
            'name' => $request->name,
            'category' => $request->category,
            'image' => $imagePath,
            'price' => $request->price,
            'stock' => $request->stock,
            'sold' => $request->sold,
        ];

        Item::create($data);

        return redirect()->route('showItems')->with('status', 'success');
    }
    
    public function delete($data) {
        $datas   = Item::findOrFail($data);
        $datas->update(['softdelete' => 1]);

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


    
    //     public function read($data) {
    //         $destana = Destana::findOrFail($data);
    
    //         return view('admin.destana.read', ['destana' => $destana]);
    //     }
    
    //     public function add() {
    //         $village = Village::all();
    
    //         return view('admin.destana.add', ['village' => $village]);
    //     }
    
    //     public function store(Request $request) {
    //         $this->validate($request, [
    //             'village_id'            => 'required|numeric',
    //             'destana_level'         => 'required|in:Pratama,Madya,Utama',
    //             'number_of_participant' => 'required|numeric',
    //             'year'                  => 'required|numeric',
    //             'photo'                 => 'required|image|mimes:jpeg,png,jpg'
    //         ]);
    
    //         $imageName = 'destana-' . $request->destana_level . '-' . date('YmdHis');
    //         $imageExt = $request->file('photo')->extension();
    //         $imagePath = $request->file('photo')->storeAs('photo/destana', $imageName . '.' . $imageExt, 'public');
    //         $data = Destana::create([
    //             'village_id'            => $request->village_id,
    //             'destana_level'         => $request->destana_level,
    //             'number_of_participant' => $request->number_of_participant,
    //             'year'                  => $request->year,
    //             'photo'                 => $imagePath,
    //         ]);
    
    //         return redirect()->route('admin.dataTable')->with('status', 'Destana Berhasil Ditambahkan');
    //     }
    
    //     public function edit(Destana $data) {
    //         $village = Village::all();
    
    //         return view('admin.destana.edit', ['data' => $data, 'village' => $village]);
    //     }
    
    //     public function update(Request $request, $data) {
    //         $this->validate($request, [
    //             'village_id'            => 'numeric',
    //             'destana_level'         => 'in:Pratama,Madya,Utama',
    //             'number_of_participant' => 'numeric',
    //             'year'                  => 'numeric',
    //             'photo'                 => 'image|mimes:jpeg,png,jpg',
    //         ]);
    
    //         $destana = Destana::findOrFail($data);
    
    //         if ($request->hasFile('photo') && $request->photo != null) {
    
    //             $file_path = public_path('storage/'.$destana['photo']);
    
    //             if (Storage::exists('public/' . $destana->photo)) {
    //                 Storage::delete('public/' . $destana->photo);
    //             }
    
    //             $imageName = 'destana-' . $request->destana_level . '-' . date('YmdHis');
    //             $imageExt = $request->file('photo')->extension();
    //             $imagePath = $request->file('photo')->storeAs('photo/destana', $imageName . '.' . $imageExt, 'public');
    
    //             $destana->update([
    //                 'village_id'            => $request->village_id,
    //                 'destana_level'         => $request->destana_level,
    //                 'number_of_participant' => $request->number_of_participant,
    //                 'year'                  => $request->year,
    //                 'photo'                 => $imagePath
    //             ]);
    
    //             return redirect()->route('admin.dataTable')->with('status', 'Data & Gambar Destana Berhasil Diubah');
    //         }
    
    //         $destana->update([
    //             'village_id'            => $request->village_id,
    //             'destana_level'         => $request->destana_level,
    //             'number_of_participant' => $request->number_of_participant,
    //             'year'                  => $request->year
    //         ]);
    
    //         return redirect()->route('admin.dataTable')->with('status', 'Data & Gambar Destana Berhasil Diubah');
    //     }
    
    //     public function delete($data) {
    //         $delete   = Destana::findOrFail($data);
    //         $file_path = public_path('storage/'.$delete->photo);
    
    //         if (Storage::exists('public/' . $delete->photo)) {
    //             Storage::delete('public/' . $delete->photo);
    //         }
    
    //         $delete->delete();
    
    //         return redirect()->route('admin.dataTable')->with('status', 'Data & Gambar Destana Berhasil Dihapus');
    //     }
    // }

}
