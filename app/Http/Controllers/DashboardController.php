<?php

namespace App\Http\Controllers;
use App\Models\MailingList;

use App\Models\User;
use App\Models\Order;
use App\Models\PageVisitor;


use Illuminate\Http\Request;
use Validator;
use Illuminate\Validation\Rule;
use Hash;
class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);
        $data['mail'] = MailingList::get();
        $data['orders'] = Order::count();
        $data['home'] = PageVisitor::where('pages','home')->count();
        $data['product'] = PageVisitor::where('pages','product')->count();
        
        // dd($data['orders']);
        return view('pages.dashboards.index',compact('data'));
    }

    public function myProfile(){
        $user = auth()->user();
        return view('pages.apps.profile.edit',compact('user'));
    }

    public function myProfileUpdateEmail(Request $request){
        $user = auth()->user();

        $request->validate([

            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            // Add more validation rules as needed
        ]);

        $user->update([
            'email' => $request->input('email'),
            // Update more user details as needed
        ]);

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }

    public function myProfileUpdatePassword(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',

        ]);

        if($validator->fails()){
            return redirect()->back()->with(['type'=>'error','message'=>$validator->errors()->first()]);
        }



        // Check if the entered current password matches the user's actual password
        if (!Hash::check($request->input('current_password'), $user->password)) {

            return redirect()->route('profile')->with(['type'=>'error','message'=>'Current password is incorrect']);

        }

        // Update the user's password
        $user->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        return redirect()->route('profile')->with(['success'=>'error','message'=>'Password updated successfully']);
    }

    public function myProfileUpdateName(Request $request){
        $user = auth()->user();

        $request->validate([

            'name' => 'required',
            // Add more validation rules as needed
        ]);

        $user->update([
            'name' => $request->input('name'),
            // Update more user details as needed
        ]);

        return redirect()->route('profile')->with('success', 'Name updated successfully');
    }

}
