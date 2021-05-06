<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('id','desc')->paginate(8);
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $employee = Employee::create($request->all());

        return redirect('employees')->with('status','Se ha creado un empleado exitosamente :)');
    }
    public function show($id){
        $employee= Employee::find($id);
        return view('employee.show', compact('employee'));
    }

    public function destroy($id){
        $employee= Employee::find($id)->delete();
        return redirect('employees')->with('type','Se ha eliminado correctamente el usuario');
    }
    public function edit($id){
        $employee= Employee::find($id);
        return view('employee.edit', compact('employee'));
    }
    public function update(Request $request, $id){
        $employee = Employee::find($id)->update($request->all());
        return redirect('employees')->with('type1', 'se han actualizado los datos :|');
    }
}
