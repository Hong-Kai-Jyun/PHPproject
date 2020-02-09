<!--
<nav class="navbar navbar-expand-lg navbar-light navbar-default">
  <div class="container">
    <a href="{{ url('/') }}" class="navbar-brand">
      SYSTEM
    </a>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a href="{{ action('mySystemController@index') }}" class="nav-link">
          LIST
        </a>
      </li>
    </ul>
  </div>
</nav>
-->
<!--menu開始-->  
<div class="nav navbar-default col-sm-auto"><!-- style="width:30%"navbar-fixed-bottom-->

    <div class="col-sm-1"></div><!--空白1-->

    <div class="nav navbar-default col-sm-auto">
    <li><a data-toggle="tab" href="#menu2">首頁</a></li>
	 </div>
	
    <tr class="nav navbar-nav navbar-right nav-tabs">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">我的訂單</a>
        <ul class="dropdown-menu">
           <li><a href="mysystem_index">新增訂單</a></li>
           <li><a href="unover_myorder">未結訂單清單</a></li>
           <li><a href="query_myorder">訂單查詢</a></li>
        </ul>
      </li>
	  
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >庫存</a>
        <ul class="dropdown-menu">
           <li><a href="#">待入庫清單</a></li>
           <li><a href="#">現有庫存清單</a></li>
           <li><a href="#">歷史庫存查詢</a></li>
        </ul>
      </li>
	  
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >客戶訂單</a>
        <ul class="dropdown-menu">
           <li><a href="#">新增訂單</a></li>
           <li><a href="#">客戶訂單狀態</a></li>
           <li><a href="#">查詢歷史交易</a></li>
        </ul>
      </li>
	  
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >顧客管理</a>
        <ul class="dropdown-menu">
           <li><a href="#">新增客戶</a></li>
           <li><a href="#">客戶資料查詢</a></li>
        </ul>
      </li>
	  
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >供應商管理</a>
        <ul class="dropdown-menu">
           <li><a href="#">新增供應商</a></li>
           <li><a href="#">查詢供應商</a></li>
        </ul>
      </li>
	  
	  <!--
       <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
       <li><a data-toggle="tab" href="#">Log out</a></li>
       <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
      -->    
	</tr>
    
</div>
<!--menu結束-->