<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Admin;

class adminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required | email',
            'password' => 'required',
        ]);
        $email = $request->input('email');
        $pass = $request->input('password');
        $admin_details = Admin::where('email',$email)->first();
       if(Hash::check($pass,$admin_details->password)){
            return response()->json($admin_details, 200);
       }
       else{
        return response()->json([''], 201);
       }
    }
    public function show()
    {
       return response()->json('hello');
    }

    //
}
