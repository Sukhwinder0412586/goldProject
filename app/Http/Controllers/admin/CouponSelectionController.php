<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\CustCoupon;
use App\Models\CouponTransaction;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use DB;

class CouponSelectionController extends Controller
{
    public function createSale(Request $request)
    {
    	if($request->isMethod('post'))
    	{
			$data = CustCoupon::with('customer','distributor')->where('coupon' ,$request->voucher)->first();
			return view('admin.coupon_selections.confirm_selection',compact('data'));
			
		}
		
		$users = User::pluck('name','id')->all();
    	return view('admin.coupon_selections.create',compact('users'));
    }

    public function index()
    {
	//	echo "hii"; die;
    	return view('admin.coupon_selections.index');
	}
	public function coupon_transaction_save(Request $request)
    {
		
		$data = $request->input();
		CouponTransaction::create($data);
		return redirect()->route('coupon_selections.index')
                ->with('success_message', 'Voucher Send Successfully');
	}


}
