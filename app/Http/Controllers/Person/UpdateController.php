<?php

namespace App\Http\Controllers\Person;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Http\Controllers\Controller;
use App\Http\Requests\Person\UpdateRequest;

class UpdateController extends Controller
{
   public function __invoke(UpdateRequest $request, Person $person){
   
      $data= $request->validated();
      $person->update($data);
      return $person;
   }
}
