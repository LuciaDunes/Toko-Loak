<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use \DB;

class TransactionController extends Controller
{
    public function showTransaction(){
        $data = Transaction::all();
        $no = 1;

        return view('admin.transaction', ['datas' => $data, 'no' => $no]);
    }
    public function store(Request $request) { 
        $data = [
            'user_id' => auth()->id(),
            'item_id' => $request->item_id,
            'total' => $request->total,
            'date' => now()
        ];

        Transaction::create($data);

        return redirect()->route('home')->with('status', 'success');
    }
    public function chart() {
        $dataTransaction   = Transaction::with('user')->with('item')->get();
        $fpByMonth          = Transaction::select(DB::raw('count(*) as `count`'), DB::raw("DATE_FORMAT(date, '%M') new_date"),  DB::raw('MONTH(date) month'))->groupby('month')->get();
        $fpByYear           = Transaction::select(DB::raw('count(*) as `count`'), DB::raw("DATE_FORMAT(date, '%Y') new_date"),  DB::raw('YEAR(date) year'))->groupby('year')->get();

        $categoriesByYear   = [];
        $categoriesByMonth  = [];
        $dataByYear         = [];
        $dataByMonth        = [];

        foreach ($fpByMonth as $fp) {
            $categoriesByMonth[]   = $fp->new_date;
            $dataByMonth[]         = $fp->count;
        }

        foreach ($fpByYear as $fp) {
            $categoriesByYear[]   = $fp->new_date;
            $dataByYear[]         = $fp->count;
        }

        return view('admin.chart', ['dataTransaction' => $dataTransaction, 'categoriesByMonth' => $categoriesByMonth, 'dataByMonth' => $dataByMonth, 'categoriesByYear' => $categoriesByYear, 'dataByYear' => $dataByYear]);
    }
}
