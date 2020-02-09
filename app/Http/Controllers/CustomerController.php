<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Route;
use View;
use App\Customer;
class CustomerController extends Controller
{
    public function index(){
       $customers = Customer::all();
       return View::make('board',['customers' => $customers]);
    }

    public function query(){
       //$id = $_POST['updata'];
       $customers = DB::select('select * from customers ');// where $id
       return View::make('updata',['customers' => $customers]);
    } 
}
