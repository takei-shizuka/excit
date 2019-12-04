<?php

namespace App\Http\Controllers;

use \App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function index(Request $request)
{
    $items = Users::all();
    return view('user.index',['items' => $items]);

}
}
