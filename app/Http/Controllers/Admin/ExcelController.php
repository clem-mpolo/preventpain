<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Imports\ComptableImport;
use App\Models\Comptable;
use Excel;

class ExcelController extends Controller
{
    public function index() {
        return view('admin.excel.importation');
    }

    public function store(Request $request) {
        $data = Comptable::all();

        

        if ($request->file('excel_file')) {
            if ($data) {
                DB::table('comptables')->truncate();
            }
            Excel::import(new ComptableImport, $request->file('excel_file'));
            return redirect()->back()->with('message', 'Limportation effectué avec success');
        }else {
            return redirect()->back()->with('message2', 'Le champs de selection est vide !');
        }
        
        

    }

    public function selection() {

        $data = Comptable::all();

        return view('admin.excel.importation', compact('data'))->with('message', 'Le produit supprimé avec succée');
    }
}
