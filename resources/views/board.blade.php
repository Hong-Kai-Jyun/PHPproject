@extends('layouts.master')
@section('title','客戶列表')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">客戶列表

         <div class="nav navbar-default col-sm-auto">
          <ul class="navbar-nav ml-auto">
            <li  class="dropdown">
            <a href="{{ action('CustomerController@index') }}" class="nav-link">新增</a>
            </li>

            <li  class="dropdown">
            <a href="{{ action('CustomerController@index') }}" class="nav-link">修改</a>
            </li>

            <li  class="dropdown">
            <a href="{{ action('CustomerController@index') }}" class="nav-link">刪除</a>
            </li>

          </ul>
         </div>

        </div>
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
                  <td><?php echo $customer->Cusid; ?></td>
                  <td><?php echo $customer->Name; ?></td>
              <td><?php echo $customer->Phone; ?></td>
            </tr>
            <?php }  ?>
          </table>
        </div>  
      </div>
    </div>
  </div>
  @stop
