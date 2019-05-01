<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('admin.index');
    }


    public function index()
    {
        $admins = User::where('is_admin', '!=', 0)->get();
        return view('admin.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->city_region = $request->input('city_region');
        $user->password = bcrypt($request->input('password'));
        $user->is_admin = 1;
        $user->save();
        return redirect('/admin/admins');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.admins.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->city_region = $request->input('city_region');
        $user->save();
        return redirect('/admin/admins');
    }


    public function show(User $user)
    {
        return view('admin.admins.index', compact('user'));
    }

    
}
