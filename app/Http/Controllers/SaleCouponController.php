<?php

namespace App\Http\Controllers;

use App\Models\CustCoupon;
use App\Models\Customer;
use App\Models\DistributorCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaleCouponController extends Controller
{
    public function createSale(Request $req)
    {
    	if($req->isMethod('post'))
    	{
    		$distributor = DistributorCoupon::whereUserId(Auth::id())->first();

    		if($distributor->quantity < $req->quantity)
    		{
    			return back()->with("error_message","Oops! You don't have enough coupon to sale.");
    		}

    		$data = $req->except(['quantity','_token']);
    		$customer = Customer::firstOrCreate($data);
    		$customer_id = $customer->id;
    		$array = [];
    		$coupon =  CustCoupon::orderBy('id','desc')->first();
    		if($coupon)
    		{
    			$qc = $coupon->coupon;
    			for ($i=1; $i <=$req->quantity ; $i++) { 
    				$q = $qc+$i;
    				$array[] = ["cust_id"=>$customer_id,"coupon"=>$q];
    			}
    		}
    		else
    		{
    			for ($i=1; $i <=$req->quantity ; $i++) { 
    				$q = "1000".$i;
    				$array[] = ["cust_id"=>$customer_id,"coupon"=>$q];
    			}
    		}
    		CustCoupon::create($array);

    		$distributor->quantity = $distributor->quantity - $req->quantity; 
    		$distributor->save();
    		return redirect()->route('salecoupon.index')
                ->with('success_message', 'Coupon has successfully saled.');
    	}
    	return view('user.saleCoupon.create');
    }

    public function index()
    {
    	CustCoupon
    }


}
