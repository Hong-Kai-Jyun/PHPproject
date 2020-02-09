@extends('layouts.master')

<meta name="csrf-token" content="{{ csrf_token() }}"> 
@section('title','客戶列表')
@section('content')
               <?php  
                foreach ($customers as $customer){
                ?>
               <tr>
                  <td><?php echo $customer->id; ?></td>
                  <td><?php echo $customer->Name; ?></td>
                  <td><?php echo $customer->Phone; ?></td>
                </td>

               </tr>
              <?php }  ?>
  @stop
