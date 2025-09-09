<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;

class HomeController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function list(){
        $users = User::all();
        $totals = User::count();
        return view('admin.list',compact(['users','totals']));
    }

    
    // User Management Delete Work

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Prevent admin from deleting themselves accidentally (optional)
        if (auth('admin')->id() === $user->id) {
            return redirect()->back()->with('error', 'You cannot delete yourself.');
        }

        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function profile()
    {
        $admin = Auth::guard('admin')->user(); // only the logged-in admin
        return view('admin.profile', compact('admin'));
    }
}
