<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Route;
use View;
class CustomerController extends Controller
{
    public function index(){
        return View::make('board');
    }
}