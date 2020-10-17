<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class DistributorController extends Controller
{

	public function index()
    {
        $distributors = User::all();

        return view('admin.distributor.index', compact('distributors'));
    }


   public function create(Request $request)
    {
        if($request->isMethod('post'))
        {
        	$this->validator($request->all())->validate();

        	$this->createD($request->all());

            return redirect()->route('distributor.index')
                ->with('success_message', 'Faq was successfully added.');
        }
        
        return view('admin.distributor.create');
    }

    protected function createD(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    protected function validatorEdit(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
    }

    public function edit($id,Request $request)
    {
        if($request->isMethod('post'))
        {
            $this->validatorEdit($request->all())->validate();
            
            $distributor = User::findOrFail($id);
            $distributor->update($request->all());

            return redirect()->route('distributor.index')
                ->with('success_message', 'Faq was successfully updated.');
        }

        $distributor = User::findOrFail($id);
        

        return view('admin.distributor.edit', compact('distributor'));
    }

   

   
}
