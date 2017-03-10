<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use App\Blacklist;
use App\Number;

class Controller extends BaseController
{


    public function AddUser(Request $request)
    {
        $search = explode(" ", strtolower($request->name));

        $invalid = Blacklist::whereIn('name', $search)->first();


        if($invalid == null && !ctype_alpha(str_replace(' ', '', $request->name)) === false) {
          $user = new User;
          $user->name = $request->name;
          $user->save();


          date_default_timezone_set('America/Chicago');

          $currTime = date("Y-m-d h:i:s", time());

          $nextTime = Number::first();

          if($currTime > $nextTime->time) {
              Number::first()->delete();
              return view('winner');
          }

          //redo random logic
          if(rand(1, 25) == 13) {
              return view('winner');
          }



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
