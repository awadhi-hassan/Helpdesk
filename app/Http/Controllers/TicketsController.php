<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

use function Ramsey\Uuid\v1;

class TicketsController extends Controller
{
    public function index() {
        
        $tickets = auth()->user()->tickets;

        return view('tickets.index', ['tickets' => $tickets]);
    }
    
    public function create() {
        
        return view('tickets.create');
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'required',
            'designation' => 'required',
            'priority' => 'required',
            'pic' => 'image|max:5000'
        ]);
        
        $user = auth()->user();

        $user->tickets()->create([
            'ticket_number' => Str::random(),
            'title' => $request->title,
            'designation' => $request->designation,
            'priority' => $request->priority,
            'description' => $request->desc,
            'picture' => $request->pic
        ]);

        return redirect('/ticket');
        
        //dd($request);
    }
}

