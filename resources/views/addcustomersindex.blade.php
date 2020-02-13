@extends('layouts.master')
@section('title','更新客戶資料')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header"><h1>新增客戶</h1></div>
        <div class="card-body p-1">
          <table class="table table-hover m-0">

            <thead class="thead-darty">
              <tr>
                <th>客戶VIP編號</th>
                <th>客戶姓名</th>
                <th>客戶電話</th>
                <th>客戶地址</th>
              </tr>
            </thead>

              <form action = 'add_coustomers' method="POST">
                {{ csrf_field() }}
               {{ method_field('POST') }}
                <tr>
                   <td><input type="text" name="id"  value=""></td>
                   <td><input type="text" name="cu_name"  value=""></td>
                   <td><input type="text" name="phone"  value=""></td>
                   <td><input type="text" name="Addressd"  value=""></td>
                   <td><button  type="submit" name="send" value="送出表單">新增</button></td>
                </form>
                </tr>
             
              </form>
          </table>
        </div>  
      </div>
    </div>
  </div>            
  @stop
