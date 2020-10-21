<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use DateTime;

class ReportController extends Controller
{
    public function index()
    {
      //  echo "hii"; die;
    	return view('admin.reports');
    }
    public function getreports(Request $request)
    {
        $data = $request->input();
        if($data['Report_Type'] == "1")
        {
        $custDetails= DB::table('distributor_coupons')
        ->leftjoin("users","users.id", "=", "distributor_coupons.user_id")
        ->leftjoin("cust_coupons","cust_coupons.distributor_id", "=", "users.id")
        ->leftjoin("customers","customers.id", "=", "cust_coupons.cust_id")
        
        ->select("users.name as UserName","customers.name","customers.number","distributor_coupons.quantity","distributor_coupons.total_quantity")
        ->where(DB::raw("CAST(cust_coupons.created_at as date)"),">=",$data['from'])
        ->where(DB::raw("CAST(cust_coupons.created_at as date)"),"<=",$data['to'])
        ->groupBy("users.name","customers.number");
       // ->where(DB::raw("CAST(cust_coupons.created_at as date)") , ">=", $data['from'])->where(DB::raw("CAST(ie.created_date as date)") , "<=", $data['to'])
        $custDetails =  $custDetails->get();

    }
        $custDetails = json_decode(json_encode($custDetails,true));
        $delimiter = "\t";
        $filename = "custDetails" . date('Y-m-d-H-i-s') . ".xls";

        //create a file pointer
        $f = fopen('php://memory', 'w');
        $fields = array('Distributor Name', 'Customer Name', 'Customer Phone Number','Total Quantity','Pending Quantity');
        fputcsv($f, $fields, $delimiter);
        foreach ($custDetails as $key => $totalhits) {
          $lineData = array($totalhits->UserName, $totalhits->name, $totalhits->number, $totalhits->total_quantity,$totalhits->quantity);
         fputcsv($f, $lineData, $delimiter);
     }
     //print_r( $lineData); die;
     fseek($f, 0);
     header('Content-Type: text/xls;charset=UTF-8');
     header('Content-Disposition: attachment; filename="' . $filename . '";');
      //output all remaining data on a file pointer
    fpassthru($f);

    exit;
    
  }



}