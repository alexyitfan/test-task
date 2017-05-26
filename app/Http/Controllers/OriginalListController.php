<?php

namespace App\Http\Controllers;

use App\Employee;

class OriginalListController extends Controller
{
    public function index()
    {
        $employees = Employee::with('company')->paginate(20);

        return view('original-list.index',compact('employees'));
    }
}
