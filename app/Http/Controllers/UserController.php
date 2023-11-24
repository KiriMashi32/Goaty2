<?php
namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
    public function admin_panel()
    {
        $users = User::all();

        return view('admin.admin_panel', compact('users'));
    }
}
