@extends('layouts.master')
@section('title','客戶列表')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">


        <div class="nav navbar-default col-sm-auto">

          <li>
          <a href="{{ action('CustomerController@index') }}" class="nav-link">新增客戶</a>
          </li>



        </div>

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

            <form action="{{ url(/login) }}" method="post">
                <?php  {{ csrf_field() }}  
                foreach ($customers as $customer){
                ?>
               <tr>
                  <td><?php echo $customer->Cusid; ?></td>
                  <td><?php echo $customer->Name; ?></td>
                  <td><?php echo $customer->Phone; ?></td>

                <li>
                 <button value='<?php echo $customer->Cusid; ?>'><a href="{{ action('CustomerController@index') }}">修改</a></button>
                </li>

                <li>
                 <a href="{{ action('CustomerController@index') }}" class="nav-link">刪除</a>
                </li>

               </tr>
              <?php }  ?>
            </form>

          </table>
        </div>  
      </div>
    </div>
  </div>
  @stop
