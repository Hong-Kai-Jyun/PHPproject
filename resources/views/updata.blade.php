@extends('layouts.master')
@section('title','更新客戶資料')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header"><h1>客戶列表</h1></div>
        <div class="card-body p-1">
          <table class="table table-hover m-0">
            
            <thead class="thead-darty">
              <tr>
                <th>客戶編號</th>
                <th>客戶姓名</th>
                <th>客戶電話</th>
              </tr>
            </thead>



               <?php  
                foreach ($customers as $customer){
                ?>
               <tr>
                  <td><input type="text"  value="<?php echo $customer->id; ?>"></td>
                  <td><input type="text"  value="<?php echo $customer->Name; ?>"></td>
                  <td><input type="text"  value="<?php echo $customer->Phone; ?>"></td>
                

               </tr>
              <?php }  ?>


          </table>
        </div>  
      </div>
    </div>
  </div>            
  @stop
