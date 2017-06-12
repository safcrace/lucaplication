<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;

class UserController extends Controller
{
  public function index()
  {
      $users = User::all();

      return view('users.index', compact('users'));
  }

  public function create()
  {
    return view('users.create');
  }


  public function store(Request $request)
  {
    $user = new User($request->all());
    $user->save();
    return redirect::to('users');
  }

  public function edit($id)
  {

    $user = User::findOrFail($id);

    return view('users.edit', compact('user'));
  }

  public function update($id, Request $request)
  {

    $user = User::findOrFail($id);
    $user->fill($request->all());
    $user->save();
    return Redirect::to('users');
  }
}
