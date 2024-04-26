<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\TestUsers;

class TestUserController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect()->route('user.dashboard');
        }
        return view('user.login');
    }
    public function signup(){
        if (Auth::check()) {
            return redirect()->route('user.dashboard');
        }
        return view('user.signup');
    }
    public function dashboard(){
        return view('user.dashboard');
    }


    //     //////////bcrypt/////////////////
    // public function loginSubmit(Request $request){
    //     // $credentials = $request->validate([
    //     //     'email' => 'required',
    //     //     'password' => 'required',
    //     // ]);
    //     // dd($credentials);

    //     // if (Auth::attempt($credentials)) {
    //     //     // Authentication passed...
    //     //     return redirect()->intended(route('user.dashboard')); // Redirect to the intended page after login
    //     // }

    //     return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']); // Redirect back if login fails
    // }
    //     //////////////////////////////////////



    ///////////// Hash::make//////////////////////////
    public function loginSubmit(Request $request){

        $user = TestUsers::where('email', $request->email)->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
            // Authentication passed...
            Auth::login($user);
            return redirect()->intended(route('user.dashboard'));
        }
        
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']); // Redirect back if login fails
    }
    ////////////////////////////////////
    

    public function signupSubmit(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:test_users,email',
            'password' => 'required',
        ]);
    
        $data = new TestUsers;
        $data->name = $request->name;
        $data->email = $request->email;
        // $data->password = bcrypt($request->password);
        $data->password = Hash::make($request->password);
        $data->save();
    
        return redirect()->route('user.login')->with('success', 'Signup successful. Please login.');
    }
    

    public function destroy(){
        session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }

    public function sessionCheck()
    {
        if (Auth::check()) {
            return "User is logged in";
        } else {
            return "User is not logged in";
        }
    }
    
}
