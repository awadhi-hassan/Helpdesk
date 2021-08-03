<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

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

        return view('admin', ['users' => $users, 
            'tickets' => $tickets,
            'request' => $request
        ]);
    }
}
