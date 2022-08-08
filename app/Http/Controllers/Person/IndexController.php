<?php

namespace App\Http\Controllers\Person;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
   public function __invoke(){
   
      $people=Person::all();
      return $people;
   }
}
