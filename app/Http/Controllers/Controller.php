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
        $search = explode(" ", strtolower($request->name));

        $invalid = Blacklist::whereIn('name', $search)->first();

        if($invalid == null) {
          $user = new User;
          $user->name = $request->name;
          $user->save();
          flash('You have been added to the database!', 'success');
          return redirect()->action("Controller@Youtube");
        }
        flash('Invalid input!', 'danger');
        return redirect()->action("Controller@Youtube");
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
