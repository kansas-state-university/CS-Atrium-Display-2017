<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function FrontPage()
    {
      $users = \DB::table('users')->get();
      return view('index', compact('users'));
    }

    public function AddUser($request = null)
    {
      $users = \DB::table('users')->get();
      return view('index', compact('users'))->with("success", "Added user!");
    }


}
