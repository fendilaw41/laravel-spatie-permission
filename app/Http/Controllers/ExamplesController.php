<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamplesController extends Controller
{
    public function show_my_roles()
    {
       $user = auth()->user()->getRoleNames();
//        or
        return $user;

// output:
/**
        Collection {
          #items: array:1 [
            0 => "writer"
          ]
        }
 */
    }
}
