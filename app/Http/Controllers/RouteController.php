<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Route;

class RouteController extends Controller
{
  public function index()
  {
      $routes = Route::all();

      return view('routes.index', compact('routes'));
  }

  public function create()
  {
    return view('routes.create');
  }


  public function store(Request $request)
  {
    $route = new Route($request->all());
    $route->save();
    return redirect::to('routes');
  }

  public function edit($id)
  {

    $route = Route::findOrFail($id);

    return view('routes.edit', compact('route'));
  }

  public function update($id, Request $request)
  {

    $route = Route::findOrFail($id);
    $route->fill($request->all());
    $route->save();
    return Redirect::to('routes');
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
