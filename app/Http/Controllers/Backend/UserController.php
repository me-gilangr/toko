<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at', 'DESC')->get();
        return view('backend.user.index', compact('user'));
    }

    public function create()
    {
        $role = Role::orderBy('name')->get();
        return view('backend.user.create', compact('role'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        try {
            $user = User::firstOrCreate([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            $user->assignRole($request->role);

            session()->flash('success', 'Data User Berhasil di-Tambahkan !');
            return redirect(route('user.index'));
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi Kesalahan !');
            return redirect()->back();
        }
    }
}
