@extends('layouts.master')
@section('title','客戶列表')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">


        <div class="nav navbar-default col-sm-auto">

          <li class="nav-item active">
          <button><a href="{{ url('add_coustomers_index') }}" class="nav-link">新增客戶</a></button><!--不能用action-->
          </li>



        </div>

        <div class="card-header"><h1>客戶列表</h1></div>
        <div class="card-body p-1">
          <table class="table table-hover m-0">
            <thead class="thead-darty">
              <tr>
                <th>客戶VIP編號</th>
                <th>客戶姓名</th>
                <th>客戶電話</th>
              </tr>
            </thead>


                <?php  
                foreach ($customers as $customer){
                ?>
               <tr>
                  <td><?php echo $customer->id; ?></td>
                  <td><?php echo $customer->Name; ?></td>
                  <td><?php echo $customer->Phone; ?></td>

                <td>
                 <form action="updata" method="post"> 
                 {{ csrf_field() }}
                 <input type="hidden" name="id" value='<?php echo $customer->id; ?>'>
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
