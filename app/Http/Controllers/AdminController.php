<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();
        $tickets = Ticket::all();

        if ($request->filled('tickets_filter')){
            $tickets = $tickets->where('designation', $request->tickets_filter);
        }  
          
        if ($request->filled('users_filter')){
            $users = $users->where('department', $request->users_filter);
        }

        return view('admin.admin', ['users' => $users, 
            'tickets' => $tickets,
            'request' => $request
        ]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'max:255','unique:users','email'],
            'employee_id' => ['required'],
            'department' => ['required'],
            'password' => ['required'],
        ]);

        $password = ['password' => Hash::make($data['password'])];
        
        User::create(array_merge($data, $password));

        return redirect('/admin');
    }

    public function edit()
    {
        return view('admin.user.edit');
    }
}
