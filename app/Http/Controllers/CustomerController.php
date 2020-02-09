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

    //更新前取出特定資料的查詢
    public function query(){
    //   echo "id:".$_POST['id']."</br>";
       $id = $_POST['id'];
       $customers = DB::select("select * from customers where id ='{$id}' ");
     //  echo "select * from customers where '{$id}' "; 
       return View::make('updata',['customers' => $customers]);
    } 

    //更新的動作
    public function updata(){
        $post = new App\Customer;
        $post = App\Customer::find(1);
        $post->id = $_POST['id'];
        $post->Name = $_POST['name'];
        $post->Phone = $_POST['phone'];
        $post->save();
        return view('board');
    }
}
