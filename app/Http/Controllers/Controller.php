<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use App\Blacklist;

class Controller extends BaseController
{


    public function AddUser(Request $request)
    {
        $search = strtolower($request->name);
        $invalid = Blacklist::where('name', $search)->first();
        if($invalid == null) {
          User::insert(
            ['name' => $request->name]
          );
          return redirect()->action("Controller@Youtube")->with('success', 'Added user!');
        }
        return redirect()->action("Controller@Youtube")->withErrors('Invalid name!');
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
