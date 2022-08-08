<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonsController extends Controller
{
   public function __invoke(){
   
      $persons = [
      [
         'id'=>1,
         'name'=>'Kirill',
         'age'=> 36,
         'job'=>'developper'
      ],
      [
         'id'=>2,
         'name'=>'Oleg',
         'age'=> 58,
         'job'=>'Pensioner'
      ],
      [
         'id'=>3,
         'name'=>'Oksana',
         'age'=> 45,
         'job'=>'4elovek'
      ],
      [
         'id'=>4,
         'name'=>'Babushka',
         'age'=> 81,
         'job'=>'Babushka'
      ]
     ] ;
     return $persons;
   }
}
