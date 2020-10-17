<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DistributorCoupon;
use App\User;
use Illuminate\Http\Request;
use Exception;

class DistributorCouponController extends Controller
{

    /**
     * Display a listing of the distributor coupons. with new
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $distributorCoupons = DistributorCoupon::with('user')->get();

        return view('admin.distributor_coupons.index', compact('distributorCoupons'));
    }

    /**
     * On Get Show the form for creating a new distributor coupon and On Post Store a new distributor coupon in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * On Get @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector | On Post @return Illuminate\View\View
     */
    public function create(Request $request)
    {
        if($request->isMethod('post'))
        {
            
            $data = $this->getData($request);
            
            DistributorCoupon::create($data);

            return redirect()->route('distributor_coupon.distributor_coupons.index')
                ->with('success_message', 'Distributor Coupon was successfully added.');
        }

        $users = User::pluck('name','id')->all();
        
        return view('admin.distributor_coupons.create', compact('users'));
    }

    /**
     * Show the form for editing the specified distributor coupon.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id,Request $request)
    {
        if($request->isMethod('put'))
        {
            
            $data = $this->getData($request);
            
            $distributorCoupon = DistributorCoupon::findOrFail($id);
            $distributorCoupon->update($data);

            return redirect()->route('distributor_coupon.distributor_coupons.index')
                ->with('success_message', 'Distributor Coupon was successfully updated.');
        }

        $distributorCoupon = DistributorCoupon::findOrFail($id);
        $users = User::pluck('id','id')->all();

        return view('admin.distributor_coupons.edit', compact('distributorCoupon','users'));
    }


    /**
     * Remove the specified distributor coupon from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $distributorCoupon = DistributorCoupon::findOrFail($id);
            $distributorCoupon->delete();

            return redirect()->route('distributor_coupon.distributor_coupons.index')
                ->with('success_message', 'Distributor Coupon was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'user_id' => 'nullable',
            'quantity' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
