<?php

namespace App\Http\Controllers;

use App\Models\CustCoupon;
use App\Models\Customer;
use App\Models\DistributorCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;

class SaleCouponController extends Controller
{
	
    public function createSale(Request $req)
    {
    	if($req->isMethod('post'))
    	{
			//echo Auth::id(); die;
			$distributor = DistributorCoupon::whereUserId(Auth::id())->first();
			$distributor_id=Auth::id();
		
    		if($distributor->quantity < $req->quantity)
    		{
    			return back()->with("error_message","Oops! You don't have enough coupon to sale.");
    		}

    		$data = $req->except(['quantity','_token']);
    		$customer = Customer::firstOrCreate($data);
			$customer_id = $customer->id;
			$customer->quantity = ($customer->quantity == null ? 0 : $customer->quantity) + $req->quantity; 
			$customer->dist_id = Auth::id();
			$customer->save();
    		$array = [];
    		$coupon =  CustCoupon::orderBy('id','desc')->first();
    		if($coupon)
    		{
    			$qc = $coupon->coupon;
    			for ($i=1; $i <=$req->quantity ; $i++) { 
    				$q = $qc+$i;
    				$array[] = ["cust_id"=>$customer_id,"coupon"=>$q,"distributor_id"=>$distributor_id];
    			}
    		}
    		else
    		{
    			for ($i=1; $i <=$req->quantity ; $i++) { 
    				$q = "1000".$i;
    				$array[] = ["cust_id"=>$customer_id,"coupon"=>$q,"distributor_id"=>$distributor_id];
    			}
			}
			//echo "<pre>"; print_r($array); die;
			// dd($array);
			CustCoupon::insert($array);
           
			//echo "hii"; die;

    		$distributor->quantity = $distributor->quantity - $req->quantity; 
    		$distributor->save();

            
    		// return redirect()->route('salecoupon.index')
      //           ->with('success_message', 'Coupon has successfully saled.');
    	}
    	return view('user.saleCoupon.create');
    }

    public function index()
    {
		$customers = Customer::where('dist_id',Auth::id())->get();
    	return view('user.saleCoupon.index',compact('customers'));
    }

    public function downloadPdf($name,$id)
    {
        $data = CustCoupon::whereCustId($id)->get();
        $data = ["data"=>$data];
        $pdf = PDF::loadView('pdf',$data);
        return $pdf->download($name.'_vouchers.pdf');
    }

}
