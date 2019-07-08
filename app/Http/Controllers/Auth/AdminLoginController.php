<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Session;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }
        //Login Request
    public function login(Request $request)
    {
        //Check Http Requests
        if($request->isMethod('post'))
        {
            
            $this->validate($request, [
                'email'   => 'required|email',
                'password' => 'required|min:6'
            ]);
            //Attempt to Login User
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
                Session::flash('success', 'Login success');
                return redirect()->intended(route('admins.dashboard'));
            }
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
        else {
            //Show Form
            return view('auth.admin_login');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('auth.admin_login');
    }

}