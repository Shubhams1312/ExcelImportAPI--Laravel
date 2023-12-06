<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function import(Request $request) 
    {
        Excel::import(new UsersImport, $request->file('file') ); 
        return  response()->json([
            'message' => true,
            
        ],201);
    }
}
