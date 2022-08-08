<?php

namespace App\Http\Controllers\Person;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Http\Controllers\Controller;
use App\Http\Requests\Person\UpdateRequest;

class DeleteController extends Controller
{
   public function __invoke(Person $person){
   
      $person->delete();
      return response([]);
   }
}
