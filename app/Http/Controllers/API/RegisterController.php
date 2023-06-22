<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\User;



class RegisterController extends BaseController
{
  
     private function getRandomString($length) {
       $characters = '0123456789';
       $string = '';

       for ($i = 0; $i < $length; $i++) {
         $string .= $characters[mt_rand(0, strlen($characters) - 1)];
     }

      return $string;
   }
   
}