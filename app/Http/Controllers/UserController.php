<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UserImport;
use Excel;

class UserController extends Controller
{
    public function index() {
        return view('excel.index');
    }

    public function store(Request $request) {
        Excel::import(new UserImport, $request->file('excel_file'));
    }
}
