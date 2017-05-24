<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Company;

class CompanyController extends Controller
{
  public function index()
  {
      $companies = Company::all();

      return view('companies.index', compact('companies'));
  }

  public function create()
  {
    return view('companies.create');
  }


  public function store(Request $request)
  {
    $company = new Company($request->all());
    $company->save();
    return redirect::to('companies');
  }

  public function edit($id)
  {

    $company = Company::findOrFail($id);

    return view('companies.edit', compact('company'));
  }

  public function update($id, Request $request)
  {

    $company = Company::findOrFail($id);
    $company->fill($request->all());
    $company->save();
    return Redirect::to('companies');
  }

  public function destroy($id, Request $request)
  {
    //$message = /*$this->credit->id .*/ 'fue eliminado de los registros';
    return $id;
    //$this->credit->delete();
    if ($route->ajax()) {
      return $message;
    }



  }
}
