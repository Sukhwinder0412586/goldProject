<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DistributorCoupon;
use App\Models\Customer;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stats = DistributorCoupon::whereUserId(Auth::id())->first();
        $customer = Customer::whereDistId(Auth::id())->count();
        return view('user.dashboard',compact('stats','customer'));
    }

    public function couponTransaction()
    {
        $data = CouponTransaction::whereDistId(Auth::id())->get();
        return view('user.couponTransactionList',compact('data'));
    }
}
