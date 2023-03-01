<?php

namespace App\Http\Controllers\CSV;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersListImport;

class UserListController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function fileImport(Request $request)
    {
        $import = new UsersListImport();

        Excel::import($import, $request->file('file')->store('temp'));

        return redirect()->back()->with('success', 'Data imported successfully.');
    }
}
