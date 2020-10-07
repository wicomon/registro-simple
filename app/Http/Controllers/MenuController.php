<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MenuController extends Controller
{
    public function index()
    {
        return redirect('/register');
    }

    public function exportExcel()
    {
        return Excel::download(new UsersExport, 'user-list.xlsx');
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new UsersImport, $file);

        return back()->with('message', 'Importación de usuarios completada');
    }
    
}
