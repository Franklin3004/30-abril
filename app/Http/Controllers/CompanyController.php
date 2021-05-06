<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('id', 'desc')->paginate(5);
        return view('company.index', compact('companies'));
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {
        $company = Company::create($request->all());

        return redirect('companies')->with('status','Se ha creado una compañia exitosamente :)');
    }

    public function show($id)
    {
        $company = Company::find($id);
        return view('company.show', compact('company'));
    }

    public function destroy($id)
    {
        $company =  Company::find($id)->delete();
        return redirect('companies')->with('type','Se ha eliminado el correctamente la compañia');
    }
    public function edit($id){

        $company = Company::find($id);
        return view('company.edit', compact('company'));
    }
    public function update(Request $request,$id){
        $company = Company::find($id)->update($request->all());
        return redirect('companies')->with('type1','Se han actualizado los datos correctamente :|');

    }
}
