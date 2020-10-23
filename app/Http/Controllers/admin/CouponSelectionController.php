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
use App\Mail\LuckyDrawEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class CouponSelectionController extends Controller
{
    public function createSale(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$this->validator($request->all())->validate();
			$data = CustCoupon::with('customer','distributor')->where('coupon' ,$request->voucher)->first();
			//echo $data->cust_coupons; die;
			if($data->coupon_status==0){
				
			}
			else{
				return redirect()->route('coupon_selections.index')
                ->with('error_message', 'Coupon already used, Please select another coupon');
			}
			
			return view('admin.coupon_selections.confirm_selection',compact('data'));
			
		}
		
		$users = User::pluck('name','id')->all();
    	return view('admin.coupon_selections.create',compact('users'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'voucher' => ['required', 'exists:cust_coupons,coupon'],
           
        ]);
    }

    public function index()
    {
	//	echo "hii"; die;
    	return view('admin.coupon_selections.index');
	}
	public function coupon_transaction_save(Request $request)
    {
		
		$data = $request->input();
		$cust_coupons = CustCoupon::with('customer','distributor')->where('coupon' ,$request->coupon)->first();
		$cust_coupons->coupon_status ='1';
		$cust_coupons->save();
		$data = CouponTransaction::create($data);
		$user = User::whereId($request->distributor_id)->first();
		Mail::to($user->email)->send(new LuckyDrawEmail($data));
		return redirect()->route('coupon_selections.index')
                ->with('success_message', 'Voucher Send Successfully');
	}


}
