<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Spending;

class SpendingController extends Controller
{
  public function index()
  {
      $spendings = Spending::all();

      return view('spendings.index', compact('spendings'));
  }

  public function create()
  {
    return view('spendings.create');
  }


  public function store(Request $request)
  {
    $spending = new Spending($request->all());
    $spending->save();
    return redirect::to('spendings');
  }

  public function edit($id)
  {

    $spending = Spending::findOrFail($id);

    return view('spendings.edit', compact('spending'));
  }

  public function update($id, Request $request)
  {

    $spending = Spending::findOrFail($id);
    $spending->fill($request->all());
    $spending->save();
    return Redirect::to('spendings');
  }
}
