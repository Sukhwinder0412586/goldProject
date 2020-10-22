<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CouponTransaction;
use App\Models\Customer;
use App\Models\CustCoupon;
use Barryvdh\DomPDF\Facade as PDF;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('admin.dashboard');
    }

    public function customers()
    {
        $customers = Customer::with('distributor')->get();
        
        return view('admin.customers',compact('customers'));
    }

    public function downloadPdf($name,$id)
    {
    	$data = CustCoupon::with('customer','distributor')->whereCustId($id)->get();
        $data = ["data"=>$data];
        $pdf = PDF::loadView('admin.pdf',$data);
        return $pdf->download($name.'_voucher.pdf');
    }
}
