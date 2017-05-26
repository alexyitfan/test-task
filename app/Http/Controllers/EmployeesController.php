<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::with('company')->paginate(15);

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = new Employee();

        $companies = $this->getCompaniesOptions();

        return view('employees.create', compact('employee', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->check($request);

        $employee = new Employee($request->except('company_id'));

        $company = Company::findOrfail($request->input('company_id'));

        $employee->company()->associate($company);

        $employee->save();

        return redirect()->route('employees.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

        $companies = $this->getCompaniesOptions();

        return view('employees.edit', compact('employee', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $this->check($request);

        $company = Company::findOrfail($request->input('company_id'));

        $employee->company()->associate($company);

        $employee->update($request->except('company_id'));

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);

        return redirect()->route('employees.index');
    }

    protected function check($request)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' =>'required|email',
            'department1' => 'required',
            'department2' => 'required',
            'department3' => 'required',
            'group' => 'required',
            'role' => 'required',
            'company_id' => 'required|exists:companies,id'
        ];

        $this->validate($request, $rules);
    }

    protected function getCompaniesOptions()
    {
        $companies = [];

        Company::get()->each(function ($company) use (&$companies) {
            $companies[$company->id] = $company->name;
        });

        return $companies;
    }
}
