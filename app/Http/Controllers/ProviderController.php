<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Provider;

class ProviderController extends Controller
{
  public function index()
  {
      $providers = Provider::all();

      return view('providers.index', compact('providers'));
  }

  public function create()
  {
    return view('providers.create');
  }


  public function store(Request $request)
  {
    $provider = new Provider($request->all());
    $provider->save();
    return redirect::to('providers');
  }

  public function edit($id)
  {

    $provider = Provider::findOrFail($id);

    return view('providers.edit', compact('provider'));
  }

  public function update($id, Request $request)
  {

    $provider = Provider::findOrFail($id);
    $provider->fill($request->all());
    $provider->save();
    return Redirect::to('providers');
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
