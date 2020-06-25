<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Auth;
class AdminLoginController extends Controller
{
    public function login(Request $request)
    {

    	if ($request->isMethod('post'))
    	{

    		$this->validate($request,[
    			'user_id'=>'required',
    			'password'=>'required',
    			]);

    		if (auth()->guard('admin')->attempt([
    			'user_id'=>$request->user_id,
    			'password'=>$request->password]))
    		{
    			return redirect()->intended('admin/');
    		}
    		else
    		{
    			return back()->with('error','INCORRECT USER ID|PASSWORD');
    		}
    	}
    	return view('admin.login');
    	
    }

    public function changePassword(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $this->validate($request,[
            'oldpassword'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            ]);

            $id = Auth::guard('admin')->user()->id;
            $password = Auth::guard('admin')->user()->password;

            if (Hash::check($request->oldpassword, $password)) 
            {
                $admin = Admin::find($id);
                $admin->password = Hash::make($request->password);
                $admin->save();
                return back()->with('message','Password changed Successfully');
            }
            else
            {
            	return back()->with('error','Invalid Old Password');
            }
        }

        return view('admin.changepassword');
        
    }

    public function profileData(Request $request)
    {
        $this->validate($request,[
        'user_id'=>'required',
        'email'=>'required|email',
        'currentpassword'=>'required',
        ]);

        $id = Auth::guard('admin')->user()->id;
        $password = Auth::guard('admin')->user()->password;

        if (Hash::check($request->currentpassword, $password)) 
        {
            $admin = Admin::find($id);
            $admin->user_id = $request->user_id;
            $admin->email = $request->email;
            $admin->save();
            return back()->with('message','Profile Data updated Successfully');
        }
        else
        {
        	return back()->with('error','Incorrect Password');
        }

    }

    public function logout()
    {
    	auth('admin')->logout();
    	
    	return redirect()->route('admin.login');
    }

    public function create()
    {
        $a = new Admin();
        $a->user_id = 'admin001';
        $a->email = 'admin@gmail.com';
        $a->password = Hash::make('admin123');
        $a->save();
    }
}
