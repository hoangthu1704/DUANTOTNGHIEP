<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{
    public function UserDashboard(){

        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('index',compact('userData'));

    } // End Method 


    public function UserProfileStore(Request $request)
    {

        // 

    } // End Mehtod 


    public function UserLogout(Request $request)
    {
        // 
    } // End Mehtod 


    public function UserUpdatePassword(Request $request)
    {
        // 
    } // End Mehtod 


}
