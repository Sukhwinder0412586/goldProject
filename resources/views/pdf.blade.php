<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Document</title>
  <style>
    .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
}
.table td,
.table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table tbody + tbody {
    border-top: 2px solid #dee2e6;
}
.table-bordered {
    border: 1px solid #dee2e6;
}
.table-bordered td,
.table-bordered th {
    border: 1px solid #dee2e6;
}
.table-bordered thead td,
.table-bordered thead th {
    border-bottom-width: 2px;
}

    .table {
        border-collapse: collapse !important;
    }
    .table td,
    .table th {
        background-color: #fff !important;
        text-align: center;
    }
    
  </style>
</head>
<body>
  <div class="adv-table" style="text-align: center;">
    <img alt="" src="{{ public_path('/ad_asset/img/logo.png') }}" style="width:50px;">
  	<table class="display table table-bordered table-striped" id="dynamic-table">
  		<tr>
          <th style="background: #141514!important;color: #fff">SR</th>
  		    <th style="background: #141514!important;color: #fff">Voucher</th>   
  		 </tr>
       
       @foreach($data as $d)
    		<tr>
    			<td>{{ $loop->iteration }}</td>
    			<td>{{ $d['coupon'] }}</td>
    		</tr>
      @endforeach
  		
  	</table>
  </div>
</body>
</html>