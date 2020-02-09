@extends('layouts.master')
@section('title','更新客戶資料')
@section('content')
               <?php  
                foreach ($customers as $customer){
                ?>
               <tr>
                  <td><input type="text"  value="<?php echo $customer->id; ?>"></td>
                  <td><input type="text"  value="<?php echo $customer->Name; ?>"></td>
                  <td><input type="text"  value="<?php echo $customer->Phone; ?>"></td>
                

               </tr>
              <?php }  ?>
  @stop
