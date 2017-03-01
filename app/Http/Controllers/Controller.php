<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;

class Controller extends BaseController
{
    public function FrontPage()
    {
      $users = User::get();
      return view('index', compact('users'));
    }

    public function AddUser(Request $request)
    {
      if($request == null) {
        //return redirect()->action("Controller@FrontPage")->withErrors('Unable to add user!');
      }
      User::insert(
        ['name' => $request->name]
      );
      return redirect()->action("Controller@FrontPage")->with('success', 'Added user!');
    }

    public function Youtube()
    {
      $users = User::orderBy('id', 'desc')->limit(10)->get();

      $string = "";
      foreach($users as $user) {
        $string .= $user->name;
        $string .= ":";
      }

      return view('youtube', compact('string'));
    }


}
