<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Customers extends Controller
{
    public function getAllCustomers(){
      $customers= DB::select('SELECT * FROM customers');
      return view('customers', ['customers' => $customers]);
    }
}
