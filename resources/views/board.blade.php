@extends('layouts.master')
@section('title','客戶列表')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">


        <div class="nav navbar-default col-sm-auto">

          <li class="nav-item active">
          <button><a href="{{ action('CustomerController@index') }}" class="nav-link">新增客戶</a></button>
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

{{ csrf_field() }}  
                <?php  
                foreach ($customers as $customer){
                ?>
               <tr>
                  <td><?php echo $customer->id; ?></td>
                  <td><?php echo $customer->Name; ?></td>
                  <td><?php echo $customer->Phone; ?></td>

                <td>
                 <form action="updata.blade.php" method="post"> 
                 <input type="hidden" name="updata" value='<?php echo $customer->id; ?>'>
                 <button  type="submit" name="send" value="送出表單">修改</button>
                </form>
                </td>

                 <td>

                </td>

               </tr>
              <?php }  ?>
            

          </table>
        </div>  
      </div>
    </div>
  </div>
  @stop
